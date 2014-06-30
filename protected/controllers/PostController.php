<?php

 class CronController extends Controller{

     public function actionIndex()
     {
        yelpFinder::getData($business , $location);
     }

 }

