<script type="text/javascript">
        $(function() {

            $('#slider').slider({
               value: 50,
               create: function() {               
                    $('#slideVal').val($('#slider').slider("value"));
               }
            });
            
            $('#rangeslider').slider({
                values: [35, 65],
                range: true,
                create: function() {
                    $('#rangeMin').val($('#rangeslider').slider("values", 0));
                    $('#rangeMax').val($('#rangeslider').slider("values", 1));
                }
            })
                        
            $('input').change(function(e) {
                switch (this.id) {
                    case "rangeMin":
                    case "rangeMax":
                        var index = (this.id == "rangeMax") ? 1 : 0;
                        $('#rangeslider').slider("values", index, $(this).val())
                        break;
                    case "slideVal":
                        $('#slider').slider("value", $(this).val())
                        break;
                }
            })
        });
    </script>
</head>
<body>
    <div id="rangeslider"></div>
    <div class="inputDiv">
        <label for="rangeMin">Мин. значение: </label><input id="rangeMin" />
        <label for="rangeMax">Макс. значение: </label><input id="rangeMax" />
    </div>
    
    <div id="slider"></div>
    <div class="inputDiv">
        <label for="slideVal">Значение индикатора: </label><input id="slideVal" />
    </div>    