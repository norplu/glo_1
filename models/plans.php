<?php
        class Plans {
                public function getPlans() {
                        $plans = new DOMDocument();
                        $plans->load("../xml/plans.xml");
                }
        } 
?>
