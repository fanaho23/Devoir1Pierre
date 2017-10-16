
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                function()
                {
                    
                    $('#lstSecteurs').change
                    (                           
                            function()
                           {
                                // alert("de");
                                $('#txt1').val($('#lstSecteurs option:selected').val());
                               // alert($('#txt1').val());
                                
                                AfficherRayonsBySecteur();
                           }
                    );  
                    $('#lstRayons').change
                    (                           
                            function()
                           {
                                // alert("de");
                                $('#txt2').val($('#lstSecteurs option:selected').val());
                                alert($('#txt2').val());
                                
                                AfficherEmployesByRayons();
                           }
                    );  
                   
                   
                        
                }
            );
        
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
        <h1>Liste des Rayons</h1>
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
        <h1>Liste des Employes</h1>
        <select id="lstRayons" multiple>
                <?php 
                    foreach($lesEmployes as $employes)
                        {
                       
                        ?>
                <option name='optEmploye' > <?php echo $employes->prenomE; ?> </option> 
                <?php
                      
                        }                       
                ?>
            </select>
        <div id="divSecteur"></div>
        <div id="divRayon"></div>
        <input id="txt1" type="text"hidden>
        <input id="txt2" type="text"hidden>
    </body>
</html>