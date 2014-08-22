<?php

class CaptchaController extends BaseController
{
    public function show()
    {
        with(new Securimage(array(
                'code_length' => 4,
                'image_width' => 80,
                'image_height' => 30,
                'noise_level' => 0.1,
                'font_ratio' => 0.7,
            )))->show();
    }
}
