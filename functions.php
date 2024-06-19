<?php 
            $char_number= $_GET['char_number'];

            function generatePassword($char_number) {
                
                $lowercase = 'abcdefghijklmnopqrstuvwxyz';
                $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $numbers = '0123456789';
                $symbols = '!@#$%^&*()_-+=<>?';
                
                $all_characters = $lowercase . $uppercase . $numbers . $symbols;
                $all_characters = str_shuffle($all_characters);

                $password = '';
                
                for ($i = 0; $i < $char_number; $i++) {
                    $password .= $all_characters[random_int(0, strlen($all_characters) - 1)];
                }
                
                return $password;
            }
        ?>