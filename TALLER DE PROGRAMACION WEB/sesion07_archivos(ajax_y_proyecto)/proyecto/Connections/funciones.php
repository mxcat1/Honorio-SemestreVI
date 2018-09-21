<?php
    function h($title, $head, $data){?>
    <style>
        .titulo{
            background-color: black;
            height: 50px;
            text-align: center;
            font-size: 120%;
            color: white;
        }

        .subTitulo{
            background-color: grey;
        }

        .impar{
            background-color: yellow;
            font-size: 80%;
        }

        .par{
            background-color: orange;
        }
    </style>
        <table width="100%" border="1" cellpadding="2px">
            <tr>
                <td colspan="4" class="titulo";><?php echo ($title);?></td>
            </tr>
            <tr class="subTitulo";>
                <?php
                    $k=0;
                    while($k<count($head)){ ?>
                        
                            <td><?php echo($head[$k]);?></td>
                        
                        <?php
                            $k++;
                        ?>
                    <?php
                    }
                ?>
            </tr>
                
            <?php
                $i=0;
                while($i<count($data)){ ?>
                    <tr>
                        <?php 
                            for ($j=0; $j<count($head); $j++){?>
                                <?php 
                                    if($i%2==0){ ?>
                                        <td class="impar"><?php echo($data[$i][$j]);?></td>
                                    <?php 
                                    }else{ ?>
                                        <td class="par"><?php echo($data[$i][$j]);?></td>
                                    <?php
                                    } 
                                    ?>
                                
                        <?php 
                            } 
                        ?>
                        <?php
                            $i++;
                        ?>
                    </tr>
            <?php 
                }
            ?>
        </table>
    <?php 
    } 
?>