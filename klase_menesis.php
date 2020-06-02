<?php class Menesis 
        {
            var $metai;//kokie dabar metai
            var $menpav;//koks dabar menuo
            var $mendienu; //kiek mėnesyje yra dienų
            var $savdiena; //nuo kokios savaitės dienos prasidėjo mėnuo, dieną nurodyti skaičiumi

            function __construct($met, $menp, $men, $sav)
            {

                $this->metai = $met;
                $this->menpav = $menp;
                $this->mendienos = $men;
                $this->savdiena = $sav;
            }

            function isvedimas()
            {
                echo "<div class=\"savaite\">";
                echo "<p class=\"antraste\">" . $this->metai ." ". $this->menpav . "</p>";
                echo "<span>Pr</span> <span>An</span> <span>Tr</span> <span>Kt</span> <span>Pn</span> <span>Št</span> <span>Sk</span>";
                
                switch ($this->savdiena)
                {
                    case 1:
                        break;
                    case 2:
                        echo "<span></span>";
                        break;
                    case 3:
                        for($i=0; $i<2; $i++)
                        {
                            echo "<span></span>";
                        }
                        break;
                    case 4:
                        for($i=0; $i<3; $i++)
                        {
                            echo "<span></span>";
                        }
                        break;
                    case 5:
                        for($i=0; $i<4; $i++)
                        {
                            echo "<span></span>";
                        }
                        break;
                    case 6:
                        for($i=0; $i<5; $i++)
                        {
                            echo "<span></span>";
                        }
                        break;
                    case 7:
                        for($i=0; $i<6; $i++)
                        {
                            echo "<span></span>";
                        }
                        break;
                    default:
                        echo "Neteisingai nurodyta savaitės diena";
                }
                
                for($i=1; $i<=$this->mendienos; $i++)
                {
                    echo "<button class=\"button\">" . $i . "</button>";
                }
                echo  "</div>";
            }
        }
?>
