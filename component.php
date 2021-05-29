<?php

function Input($icon, $placeHolder, $name, $value, $type){
    $input = "
		<div class=\"input-group mb-2\">
            <div class=\"input-group-prepend\">
				<div class=\"input-group-text bg-warning\">$icon</div>
            </div>
            <input type='$type' name='$name' value='$value' autocomplete=\"off\" placeholder='$placeHolder' class=\"form-control\" id=\"inlineFormInputGroup\">
        </div>
    ";
    echo $input;
}

function Button($name, $attribute, $styleClass, $buttonID, $text){
    $button = "
        <button name='$name' '$attribute' class='$styleClass' id='$buttonID'>$text</button>
    ";
    echo $button;
}