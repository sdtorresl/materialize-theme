<?php

return [
    'inputContainer' => '<div class="row"><div class="input-field col s12 {{type}}{{required}}">{{content}}</div></div>',
    'formGroup' => '{{input}}{{label}}',
    'textarea' => '<textarea name="{{name}}" class="materialize-textarea" {{attrs}}>{{value}}</textarea>',
    'file' => '<div class="file-field"><div class="btn"><span>' . __('Upload') . '</span><input name="{{name}}" type="file"></div><div class="file-path-wrapper"><input class="file-path" {{attrs}}></div></div>',
];