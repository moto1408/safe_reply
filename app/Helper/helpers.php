<?php
// コントローラー名フル取得
function controllerFullName() 
{
    return substr(class_basename(Route::currentRouteAction()), 0, (strpos(class_basename(Route::currentRouteAction()), '@') -0) );
}
// アクション名取得
function actionName() 
{
    return explode('@', class_basename(Route::currentRouteAction()))[1];
}
// コントローラー名取得
function controllerName() 
{
    return str_replace('Controller','',explode('@', class_basename(Route::currentRouteAction()))[0]);
}