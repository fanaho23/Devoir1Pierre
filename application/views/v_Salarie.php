
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
        <h1>Liste des secteurs</h1>
        <select id="lstSecteurs">
                <?php 
                    foreach($lesSecteurs as $secteurs)
                        {
                       
                        ?>
                <option name='optSecteur' value="<?php echo $secteurs->numS; ?>"> <?php echo $secteurs->nomS; ?> </option> 
                <?php
                      
                        }                       
                ?>
            </select>
        <h2>Liste des Rayons</h2>
        <select id="lstRayons">
                <?php 
                    foreach($lesRayons as $rayons)
                        {
                       
                        ?>
                <option name='optRayon' value="<?php echo $rayons->numR; ?>"> <?php echo $rayons->nomR; ?> </option> 
                <?php
                      
                        }                       
                ?>
            </select>
    </body>
</html>