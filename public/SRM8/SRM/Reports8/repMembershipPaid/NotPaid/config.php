<?php
//Memberships,07-Dec-2021 09:45:04
if (! defined("DIRECTACESS")) exit("No direct script access allowed"); 
$file_name = "repMembershipPaid/NotPaid";
//  customization settings
$template_title = "";
$category = "User";
$date_created = "07-Dec-2021 09:45:04";
$maintainance_email = "";
$images_path = "images/";
$headers_output_escaping = "Yes";
$default_page_size = "A3";
$output_escaping = "Yes";
$thumnail_max_width = "40";
$thumnail_max_height = "50";
$show_real_size_image = "";
$show_realsize_in_popup = "1";
$chkSearch = "Yes";
//  wizard settings
$language = "en";
$db_extension = "pdo";
$datasource = "table";
$sql = "";
$table = array(
"0" => "memberships",
"1" => "users");
$tables_filters = array();
$relationships = array(
"0" => "`users`.`id` = `memberships`.`id`");
$affected_column = "";
$function = "";
$groupby_column = "";
$labels = array(
"memberships.paid" => "paid",
"users.first_name" => "first_name",
"users.last_name" => "last_name",
"users.id" => "id");
$cells = array(
"memberships.paid" => "value",
"users.first_name" => "value",
"users.last_name" => "value",
"users.id" => "value");
$conditional_formating = array(
      "0" => array(
"filter" => "contain",
"column" => "memberships.paid",
"filterValue1" => "NOT NULL",
"color" => "#00ff00"));
$fields = array(
"0" => "memberships.paid",
"1" => "users.first_name",
"2" => "users.last_name",
"3" => "users.id");
$fields2 = array(
"0" => "memberships.paid",
"1" => "users.first_name",
"2" => "users.last_name",
"3" => "users.id");
$group_by = array();
$sort_by = array(
      "0" => array(
"0" => "users.last_name",
"1" => "0"));
$records_per_page = "25";
$layout = "AlignLeft";
$style_name = "blue";
$title = "Memberships";
$header = "";
$footer = "";
$allow_only_admin = "yes";
$sec_Username = "";
$sec_pass = "";
$security = "";
$is_public_access = "no";
$sec_email = "";
$members = "";
$sec_table = "";
$sec_Username_Field = "";
$sec_pass_Field = "";
$sec_email_field = "";
$sec_pass_hash_type = "";
$Forget_password = "enabled";
$is_mobile = "";
$sub_totals_enabled = "";
$filters_grouping = "null";
$sub_totals = array();