<?php
include 'FileHandle.php';

session_set_save_handler(new FileHandle('cctv'));
session_start();

