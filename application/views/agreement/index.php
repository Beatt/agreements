<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Agreements</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <!--<![endif]-->
    <style>
        .container {
            padding: 80px 0;
        }

        a {
            text-decoration: none;
        }

        tr:nth-child(even) {
            background-color: #eeeeee;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #67BAA7;
            color: white;
        }

        .text-right {
            text-align: right;
        }

        .align-items-center {
            align-items: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="pure-g">
        <div class="pure-u-1-24"></div>
        <div class="pure-u-22-24">
            <div class="pure-g align-items-center">
                <div class="pure-u-4-5">
                    <h2>Lista de convenios</h2>
                </div>
                <div class="pure-u-1-5 text-right">
                    <a href="/agreement/create" class="btn btn-primary">+ Agregar</a>
                </div>
                <div class="pure-u-1">
                    <div id="like_button_container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

<script src="list-agreements.js"></script>

<script>
  window.AGREEMENTS = '<?php print $data ?>'
  document.addEventListener('DOMContentLoaded', function () {
    const e = React.createElement;
    const domContainer = document.querySelector('#like_button_container');
    ReactDOM.render(e(LikeButton, {
      agreements: JSON.parse(window.AGREEMENTS)
    }), domContainer);
  });
</script>

</body>

</html>
