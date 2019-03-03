<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="./v/images/slider/02.jpg" alt="" />
                    <a href="#"><img src="./v/images/slider/01.jpg" alt="" title="This is an example of a caption" /></a>
                    <img src="./v/images/slider/03.jpg" alt="" />
                    <img src="./v/images/slider/04.jpg" alt="" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> <?=$text?> <em>HTML</em> <?=$title?> <a href="#">a link</a>.
                </div>
            </div>
            <script type="text/javascript" src="./v/js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="./v/js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
            <h1>New Products</h1>