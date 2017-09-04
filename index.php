<!-- 
    PHP Basic - Course review
    Started: Sept 4, 2017
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>PHP Basics - Course Review</title>
    </head>
    <body>
        <h1>PHP Basics - Course Review</h1>
        
        <h3>Variables</h3>
            <section>
                <p>Defining PHP variables</p>
                <ul>
                    <li>Variable name format: $variableName or $variable_name</li>
                    <li>Variable data depends on assigned value</li>
                        <ul>
                            <li>$string = "PHP Development"</li>
                            <li>$integer = 1</li>
                            <li>$float = 1.25</li>
                            <li>$boolean = true</li>
                        </ul>
                    <li>Use var_dump to check variable data type</li>
                        <?php $string = "PHP Development"; var_dump($string); ?>
                        <?php $integer = 1; var_dump($integer); ?>
                        <?php $float = 1.25; var_dump($float); ?>
                        <?php $boolean = true; var_dump($boolean); ?>
                    <li>Using variables in echo</li>
                        <ul>
                            <li>echo "Learning " . $subject . "basics."</li>
                            <li>echo "Learning {$subject} basics."</li>
                        </ul>
                    <li><strong>NOTE:</strong>Variables may change data type based on assigned data</li>
                    <p> $value = 'one';<br>
                        var_dump($value);<br>
                        $value = 1;<br>
                        var_dump($value);
                    </p>
                    <?php $value = 'one'; var_dump($value); $value = 1; var_dump($value); ?>
                </ul>
            </section>
        
        <h3>Data Types</h3>
            <h4>Strings</h4>
                <section>
                    <ul>
                        <li>Use single quotes</li>
                            <ul>
                                <li>Use in html href tags: echo '<a href="http://www.google.com">Google Home Page</a>'</li>
                                <li>When using double quotes in strings</li>
                            </ul>
                        <li>Use double quotes</li>
                            <ul>
                                <li>When using single quotes in strings</li>
                                <li>When variables are directly used inside a string to be displayed(echo).</li>
                            </ul>
                    </ul>
                </section>
        
            <h4>Integers and Floats</h4>
                <section>
                    <ul>
                        <li>Use number_format($pi_value,2) for 2 decimal places for $pi_value = 3.1214;</li>
                        <?php $pi_value = 3.1214; echo number_format($pi_value,2); ?>
                    </ul>
                </section>
            
             <h4>Boolean</h4>
                <section>
                    <ul>
                        <li>Booleans have a value of true or 1 and false, 0 or null.</li>
                        <?php
                            if(true){
                                echo "Value is true" . "<br/>";
                            }
                            if(1){
                                echo "Value is one" . "<br/>";
                            }
                            if(false){
                                echo "Not displayed because it's false.";
                            }
                            if(0){
                                echo "Not displayed because it's zero";
                            }
                            if(null){
                                echo "Not displayed because it's null";
                            }
                        ?>
                        <li>Functions used to test true or false conditions</li>
                            <ul>
                                <li>is_string() or !is_string()</li>
                                    <?php
                                        $prog_lang = "PHP";
                                        if(is_string($prog_lang)){
                                            echo '{$prog_lang} = ' . $prog_lang . ' is a string value';
                                        }
                                        echo "<br/>";
                                        if(!is_int($prog_lang)){
                                            echo '{$prog_lang} = ' . $prog_lang . ' is not an integer value';
                                        }
                                    ?>
                                <li>Use === to validate if value and data type is the same</li>
                                    <?php
                                        $prog_lang = "PHP";
                                        if($prog_lang = "PHP"){
                                            echo '$prog_lang has value of "PHP" and is a string data type';
                                        }
                                    ?>
                            </ul>
                        <li><strong>NOTE:</strong>Use var_dump() to verify data type and value</li>
                    </ul>
                </section>
        
             <h4>Array</h4>
                <section>
                    <ul>
                        <li>Defining an empty array: $names = [];</li>
                        <li>Array with one data type: $web_dev = ['php','html','css'];</li>
                        <li>Array with multiple data types: $emp = ['Adrian Ayroso',40470,true];</li>
                        <li>Use var_dump to examine array content</li>
                            <?php
                                $names = [];
                                $web_dev = ['php','html','css'];
                                $emp = ['Adrian Ayroso',40470,true];
                                var_dump($names);
                                var_dump($web_dev);
                                var_dump($emp);
                            ?>
                        <li>Adding another item in array: $names[] = "Adrian";</li>               
                            <?php
                                $names[] = "Adrian";
                                var_dump($names);
                            ?>
                        <li>Using key => value to access array data</li>
                        <li>Adding another item with a key-pair value: $emp['site'] = "Discovery";</li>
                            <?php
                                $emp = ['name' => 'Adrian Ayroso',
                                        'employee_number' => 40470,
                                        'active' => true];
                                echo "Name: {$emp['name']}" . "<br/>";
                                echo "Employee Number: {$emp['employee_number']}" . "<br/>";
                                echo "Active: {$emp['active']}" . "<br/>";
                                var_dump($emp);
                                $emp['site'] = 'Discovery';
                                var_dump($emp);
                            ?>
                        <li>Creating multi-dimentional arrays</li>
                        <li><strong>NOTE:</strong>If key-pair is used in one data, it should be used in all data entry.</li>
                            <?php
                                $emp = [
                                        [
                                            'name' => 'Adrian Ayroso',
                                            'email' => 'acayroso@gmail.com',
                                            'skills' => [
                                                            'prog_lang' => 'php',
                                                            'web' => 'html and css',
                                                            'ide' => 'netbeans'
                                                        ]
                                        ],    
                                        [
                                            'name' => 'Pilarica Ayroso',
                                            'email' => 'pgayroso@gmail.com',
                                             'skills' => ['data' => 'data encoding']
                                        ]
                                ];
                                var_dump($emp);
                                echo 'Name: ' . $emp[0]['name'] . '<br/>';
                                echo 'Email: ' . $emp[0]['email'] . '<br/>';
                                echo 'Programming language: ' . $emp[0]['skills']['prog_lang'] . '<br/>';
                                echo 'Web skill: ' . $emp[0]['skills']['web'] . '<br/>';
                                echo 'Preferred IDE: ' . $emp[0]['skills']['ide'] . '<br/>';
                                
                                echo "<br/><strong>" . "Using foreach loop to display content:" . "</strong><br/>";
                                foreach($emp as $emp_info){
                                      echo 'Name: ' . $emp_info['name'] . "<br/>";
                                      echo 'Email:' . $emp_info['email'] . "<br/>";
                                }
                            ?>  
                    </ul>
                </section>
                 
        <h3>IF statements and operators</h3>
            <h4>IF statement basics</h4>
                <section>
                    <ul>
                        <li>Using ternary operator to compare values ===</li>
                            <?php
                                $username = 'adrian.ayroso';
                                $password = 'P@assword1';
                                if(($username === 'adrian.ayroso') && ($password === 'P@assword1')){
                                    echo "Successful login.";
                                }
                            ?>
                        <li>Use string manipulation to match values, strlower() and clear spaces, trim()</li>
                            <?php
                                $email = ' Acayroso@gmail.com';
                                if(strtolower(trim($email)) === 'acayroso@gmail.com'){
                                    echo "Email match.";
                                }else{
                                    echo "Incorrect email";
                                }
                            ?>
                        <li>Combining if statements with array functions</li>
                        <li><strong>NOTE:</strong>Validate if data is present, use in_array(), array_keys()</li>
                            <?php
                                $item_code = [
                                    000 => "BreakMan",
                                    001 => "RockMan",
                                    002 => "FireMan"
                                ];
                                var_dump($item_code);    
                                var_dump(array_keys($item_code));
                                
                                $char_select = 1;
                                if(in_array($char_select,array_keys($item_code))){
                                    echo "Selected Character: {$item_code[$char_select]}";
                                }
                            ?>
                    </ul>
                </section>
             
    </body>
</html>
