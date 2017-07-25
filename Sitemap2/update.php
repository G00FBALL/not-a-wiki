<?php
    if (!empty($_POST["pass"])) {
        if (md5($_POST["pass"]) === "9fe9cb12277af13c8bc31be450a3172c") {
            $website = "http://www.musicfamily.org/realm";
            $dom = new DOMDocument("1.0", "UTF-8");
            $urlset = $dom->createElement("urlset");
            $urlset->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
            $urlset = $dom->appendChild($urlset);
            $directory = new RecursiveDirectoryIterator("..");
            $filter = new RecursiveCallbackFilterIterator($directory, function ($current) {
                /** @var SplFileInfo $current */
                if ($current->getFilename()[0] === '.') {
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

            class SortingIterator extends SplHeap
            {
                public function __construct(Iterator $iterator)
                {
                    foreach ($iterator as $item) {
                        $this->insert($item);
                    }
                }

                public function compare($b, $a)
                {
                    return strcasecmp($a->getRealpath(), $b->getRealpath());
                }
            }

            $iteratorsorted = new SortingIterator($iterator);
            $href = "";
            $html = "";
            $depthdef = mb_substr_count($website, "/") + 1;
            $depth = $depthdef;
            /** @var SplFileInfo $entry */
            foreach ($iteratorsorted as $entry) {
                $href = str_replace("..", "", $entry->getPathname());
                $href = str_replace("\\", "/", $href);
                $href = $website . $href;
                $url = $dom->createElement("url");
                $url = $urlset->appendChild($url);
                $loc = $dom->createElement("loc", $href);
                $loc = $url->appendChild($loc);
                if ($href !== $website . "/index.php") {
                    $href = str_replace("index.php", "", $href);
                    while ($depth < mb_substr_count($href, "/")) {
                        $html .= "<ul>";
                        $depth++;
                    }
                    while ($depth > mb_substr_count($href, "/")) {
                        $html .= "</ul>";
                        $depth--;
                    }
                    preg_match("/([^\\/]+)\\/$/", $href, $matches);
                    switch ($matches[1]) {
                        case "WallofShame":
                            $name = "Wall of Shame";
                            break;
                        default:
                            $name = preg_replace('/(?<=[a-z])[A-Z]/', ' $0', $matches[1]);
                    }
                    $html .= "<li><a target = \"_blank\" href = \"{$href}\">{$name}</a></li>";
                }
            }
            while ($depth > $depthdef) {
                $html .= "</ul>";
                $depth--;
            }
            $myxml = fopen("sitemap.xml", "w");
            fwrite($myxml, $dom->saveXML());
            fclose($myxml);
            $myhtml = fopen("sitemap.html", "w");
            fwrite($myhtml, $html);
            fclose($myhtml);
            echo "Updated sitemap!";
        } else {
            echo "fuck off";
        }
    }
