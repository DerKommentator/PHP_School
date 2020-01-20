<head>
    <link rel="stylesheet" type="text/css" href="paint.css" />

    <script>
            function change_color(color)
            {
                document.getElementById("pen_save").value = color.value;
            }

    </script>
</head>

<body>
    <div id="bgvideo" style="width: 1920px; height: 1080px;">
        <video id="bgvideo_player" style="width:100%; height:auto;" preload="auto" autoplay="true" loop autobuffer muted="muted" poster="https://ubistatic19-a.akamaihd.net/resource/en-us/game/rainbow6/siege/r6-siege-bg.jpg">
            <source src="https://ubistatic2-a.akamaihd.net/gamesites/rainbow6/r6-siege-bg_1280.mp4" type="video/mp4">
            <source src="https://ubistatic2-a.akamaihd.net/gamesites/rainbow6/r6-siege-bg_1280.webm" type="video/webm">
        </video>
    </div>



    <div id="main">
        <?php
        $colors = ['black' => '#000000', 'blue' => '#0000FF', 'green' => '#008000',
                   'red' => '#FF0000','white' => '#FFFFFF', 'yellow' => '#FFFF00',
                   'orange' => '#FFA500'];
        $draw_region_size = 600;
        $color_button_width = ($draw_region_size / count($colors)) + 1;
        $draw_button_size = 30;


        echo '<form method="post">';

        if(isset($_POST['pen_color']))
        {
            $pen_color = $_POST['pen_color'];
        }
        elseif(isset($_POST['pen_save']))
        {
            $pen_color = $_POST['pen_save'];
        }
        else
        {
            $pen_color = '#FFFFFF';
        }

        if(isset($_POST['reset']))
        {
            header('Refresh:0');
        }

        echo '<div style="width: '.$draw_region_size.'px; height: '.$draw_region_size.'px; border: solid black;" class="draw_section">';
            for($x=0; $x < ($draw_region_size / $draw_button_size); $x+=1)
            {
                for($y=0; $y < ($draw_region_size / $draw_button_size); $y+=1)
                {
                    $i = $y + $x * ($draw_region_size / $draw_button_size);


                    if(isset($_POST['draw_button'.$i]))
                    {
                        $button_color = $pen_color;
                    }
                    elseif(isset($_POST['button_save'.$i]))
                    {
                        $button_color = $_POST['button_save'.$i];
                    }
                    else
                    {
                        $button_color = '#FFFFFF';
                    }


                    echo '<input
                            style="
                                height: '.$draw_button_size.'px;
                                width: '.$draw_button_size.'px;
                                background-color: '.$button_color.';
                                color: '.$button_color.';
                                border: 0;"
                            type="submit"
                            name="draw_button'.$i.'"
                            value="'.$button_color.'">';

                    echo '<input type="hidden" name="button_save'.$i.'" value="'.$button_color.'">';
                }
            }
        echo '</div>';


        echo '<div class="color_pick_section">';
            foreach($colors as $color)
            {
                echo '<input
                        style="
                            background-color:'.$color.';
                            color: '.$color.';
                            height: 50px;
                            width: '.$color_button_width.'px;"
                        type="submit"
                        name="pen_color"
                        value="'.$color.'"
                    />';
            }
        echo '<input type="hidden" id="pen_save" name="pen_save" value="'.$pen_color.'">';
        echo '</div>';
        echo '<p style="font-family: Arial; font-size:24px;">Select a Color / Selected Color: ';
        echo '<input type="color" style="height:50px; width:50px" id="color_picker" onchange="change_color(this)" onkeypress="change_color(this)" value="'.$pen_color.'">';
        echo '</p></br>';
        echo '<input type="submit" style="height:50px; width:'.$draw_region_size.'px;" name="reset" value="Reset">';
        echo '</form>';
        ?>
    </div>
</body>
