<?php
    if (!empty($_POST["pass"])) {
        if (md5($_POST["pass"]) === "9fe9cb12277af13c8bc31be450a3172c") {
            $website = "http://www.musicfamily.org/realm";
            $typos = array(
                "WallofShame" => "Wall of Shame",
                "BuildingAlignements" => "Building Alignments",
                "ResearchBuildsobsolete" => "Research Builds (Obsolete)",
                ".." => "Main Page"
            );
            $ignores = array("G00F'sPicks", "test", "EndGameR45");
            $href = "";
            $html = "";
            $htmlul = array();
            $htmlli = array();
            $xml = new DOMDocument("1.0", "UTF-8");
            $urlset = $xml->createElement("urlset");
            $urlset->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
            $urlset = $xml->appendChild($urlset);
            $html = new DOMDocument();
            $directory = new RecursiveDirectoryIterator("..");
            $filter = new RecursiveCallbackFilterIterator($directory, function ($current) {
                /** @var SplFileInfo $current */
                global $ignores;
                if ($current->getFilename()[0] === '.' || in_array($current->getFilename(), $ignores)) {
                    return FALSE;
                }
                if ($current->isDir()) {
                    return TRUE;
                }
                if ($current->isFile() && $current->getFilename() === 'index.php') {
                    return TRUE;
                }
                return FALSE;
            });
            $iterator = new RecursiveIteratorIterator($filter);

            /**
             * Class SortingIterator
             * For sorting
             */
            class SortingIterator extends SplHeap {
                /**
                 * SortingIterator constructor.
                 * @param RecursiveIteratorIterator $iterator
                 */
                public function __construct(RecursiveIteratorIterator $iterator) {
                    global $website;
                    global $typos;
                    /** @var SplFileInfo $item */
                    foreach ($iterator as $item) {
                        $linkxml = str_replace("..", "", $item->getPathname());
                        $linkxml = str_replace("\\", "/", $linkxml);
                        $linkxml = $website . $linkxml;
                        $linkhtml = str_replace("index.php", "", $linkxml);
                        $name = $item->getPathInfo()->getBasename();
                        if (isset($typos[$name])) {
                            $name = $typos[$name];
                        } else {
                            $name = preg_replace('/(?<=[a-z])[A-Z]/', ' $0', $name);
                        }
                        $depth = $iterator->getDepth();
                        $parent = preg_replace("/[^\\/]+\\/$/", "", $linkhtml);
                        $this->insert(["info" => $item, "depth" => $depth, "linkxml" => $linkxml, "linkhtml" => $linkhtml, "name" => $name, "parent" => $parent]);
                    }
                }

                /**
                 * @param mixed $b
                 * @param mixed $a
                 * @return int
                 */
                public function compare($b, $a) {
                    if ($a["depth"] !== $b["depth"]) {
                        return $a["depth"] - $b["depth"];
                    } else {
                        return strcasecmp($a["name"], $b["name"]);
                    }
                }
            }

            $iteratorsorted = new SortingIterator($iterator, $website);
            foreach ($iteratorsorted as $entry) {
                $url = $xml->createElement("url");
                $url = $urlset->appendChild($url);
                $loc = $xml->createElement("loc", $entry["linkxml"]);
                $loc = $url->appendChild($loc);
                if (!isset($htmlul[$entry["parent"]])) {
                    if (!isset($htmlli[$entry["parent"]])) {
                        $htmlul[$entry["parent"]] = $html->createElement("ul");
                        $htmlul[$entry["parent"]] = $html->appendChild($htmlul[$entry["parent"]]);
                    } else {
                        $htmlul[$entry["parent"]] = $html->createElement("ul");
                        $htmlul[$entry["parent"]] = $htmlli[$entry["parent"]]->appendChild($htmlul[$entry["parent"]]);
                    }
                }
                $htmlli[$entry["linkhtml"]] = $html->createElement("li");
                $htmlli[$entry["linkhtml"]] = $htmlul[$entry["parent"]]->appendChild($htmlli[$entry["linkhtml"]]);
                $link = $html->createElement("a", $entry["name"]);
                $link->setAttribute("href", $entry["linkhtml"]);
                $link->setAttribute("target", "_blank");
                $link = $htmlli[$entry["linkhtml"]]->appendChild($link);
            }
            $myxml = fopen("sitemap.xml", "w");
            fwrite($myxml, $xml->saveXML());
            fclose($myxml);
            $html->saveHTMLFile("sitemap.html");
            echo "Updated sitemap!";
        } else {
            echo "fuck off";
        }
    }
