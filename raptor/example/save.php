<?php

    if (isset($_POST['raptor-content'])) {
        $content = [];
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $content = json_decode($content, true);
            if ($content === false) {
                $content = [];
            }
        }
        $newContent = json_decode($_POST['raptor-content']);
        if ($newContent) {
            foreach ($newContent as $id => $html) {
                $content[$id] = $html;
            }
        }

        $content = json_encode($content, JSON_PRETTY_PRINT);
        if ($content !== false) {
            if (file_put_contents($file, $content)) {
                return json_encode(true);
            }
        }
    }
    return json_encode(false);
?>