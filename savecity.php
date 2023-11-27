<?php
            require_once('ItemRepository.php');

            $itemRepository = new ItemRepository();
            $counties = $itemRepository->saveCity($name);


            
?>