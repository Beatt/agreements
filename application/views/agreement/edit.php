<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Agreements</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">

    <style>
        .alert {
            background-color: #67BAA7;
            border-radius: 10px;
            padding: 10px 5px;
            text-align: center;
        }

        .alert-primary {
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="pure-g">
        <div class="pure-u-1-24"></div>
        <div class="pure-u-22-24">
            <?php if($this->session->flashdata('notice')) { ?>
                <div class="pure-g">
                    <div class="pure-u-1">
                        <div class="alert alert-primary">
                            <p><?php print $this->session->flashdata('notice'); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="pure-g">
                <div class="pure-u-1">
                    <h1>Edición de convenio</h1>
                </div>
                <div class="pure-u-1">
                    <form action="/agreement/edit/<?php print $agreement['id'] ?>"
                          method="post"
                          class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="agreement_nombre">Nombre</label>
                                <input id="agreement_nombre"
                                       name="agreement[nombre]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['nombre'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_sector">Sector</label>
                                <input id="agreement_sector"
                                       name="agreement[sector]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['sector'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_tipo_convenio">Tipo convenio</label>
                                <input id="agreement_tipo_convenio"
                                       name="agreement[tipo_convenio]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['tipo_convenio'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_grado_academico">Grado acádemico</label>
                                <input id="agreement_grado_academico"
                                       name="agreement[grado_academico]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['grado_academico'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_ciclo_academico">Ciclo acádemico</label>
                                <input id="agreement_ciclo_academico"
                                       name="agreement[ciclo_academico]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['ciclo_academico'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_carrera">Carrera</label>
                                <input id="agreement_carrera"
                                       name="agreement[carrera]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['carrera'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_institucion_educativa">Institucion</label>
                                <input id="agreement_institucion_educativa"
                                       name="agreement[institucion_educativa]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['institucion_educativa'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_vigencia">Vigencia</label>
                                <input id="agreement_vigencia"
                                       name="agreement[vigencia]"
                                       type="date"
                                       required
                                       value="<?php print $agreement['vigencia'] ?>">
                            </div>

                            <div class="pure-control-group">
                                <label for="agreement_delegacion">Delegación</label>
                                <input id="agreement_delegacion"
                                       name="agreement[delegacion]"
                                       type="text"
                                       required
                                       value="<?php print $agreement['delegacion'] ?>">
                            </div>
                            <div class="pure-controls">
                                <a href="/" class="pure-button pure-button-default">Regresar</a>
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
