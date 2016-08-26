<?php



        function b64toUrl($data)
        {
            $dom = new \DOMDocument();
            $dom->loadHTML($data);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $image)
            {$raw = $image->getAttribute('src');
                if(preg_match('/data:image/', $raw)){
                    $name = uniqid();

                    preg_match('/data:image\/(?<mime>.*?)\;/', $raw, $groups);
                    $mimetype = $groups['mime'];
                    $filepath = \Auth::user()->id.'/lectures/images/'.$name.'.'.$mimetype;
                    $img = Image::make($raw)
                        ->encode($mimetype, 100);

                    Storage::put($filepath,$img);

                    $image->removeAttribute('src');
                    $image->setAttribute('src','/images/'.$filepath);
                }
            }

            return $dom->saveHTML();
        }

function set_active($path, $active = 'active') {

    return call_user_func_array('Request::is', (array)$path) ? $active : '';

}