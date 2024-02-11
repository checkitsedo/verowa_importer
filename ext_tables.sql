#
# Table structure for table 'tx_verowaimporter_domain_model_event'
#
CREATE TABLE tx_verowaimporter_domain_model_event (
  event_id int(11) unsigned NOT NULL,
  date_from int(11) unsigned NOT NULL,
  date_to int(11) unsigned NOT NULL,
  date_text varchar(255) NOT NULL DEFAULT '',
  hide_time tinyint(1) unsigned NOT NULL DEFAULT 0,
  title varchar(255) NOT NULL DEFAULT '',
  topic varchar(255) NOT NULL DEFAULT '',
  short_desc varchar(1024) NOT NULL DEFAULT '',
  long_desc mediumtext,
  organizer int(11) unsigned COMMENT '1:n => person.id',
  coorganizers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'coorganizers (persons) count',
  further_coorganizer varchar(1024) NOT NULL DEFAULT '',
  service1 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service1_label varchar(255) NOT NULL DEFAULT '',
  service2 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service2_label varchar(255) NOT NULL DEFAULT '',
  service3 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service3_label varchar(255) NOT NULL DEFAULT '',
  service4 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service4_label varchar(255) NOT NULL DEFAULT '',
  service5 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service5_label varchar(255) NOT NULL DEFAULT '',
  service6 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service6_label varchar(255) NOT NULL DEFAULT '',
  service7 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service7_label varchar(255) NOT NULL DEFAULT '',
  service8 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
  service8_label varchar(255) NOT NULL DEFAULT '',
  lectors int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'lectors (persons) count',
  lectors_label varchar(255) NOT NULL DEFAULT '',
  organists int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'organists (persons) count',
  organists_label varchar(255) NOT NULL DEFAULT '',
  vergers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'vergers (persons) count',
  vergers_label varchar(255) NOT NULL DEFAULT '',
  catering varchar(255) NOT NULL DEFAULT '',
  with_sacrament tinyint(1) unsigned NOT NULL DEFAULT 0,
  childcare_id tinyint(1) unsigned NOT NULL DEFAULT 0,
  childcare_text varchar(255) NOT NULL DEFAULT '',
  childcare_person int(11) unsigned COMMENT '1:n => person.id',
  additional_text1 varchar(255) NOT NULL DEFAULT '',
  additional_text1_label varchar(255) NOT NULL DEFAULT '',
  additional_text2 varchar(255) NOT NULL DEFAULT '',
  additional_text2_label varchar(255) NOT NULL DEFAULT '',
  additional_text4 varchar(255) NOT NULL DEFAULT '',
  additional_text4_label varchar(255) NOT NULL DEFAULT '',
  subs_module_active tinyint(1) unsigned NOT NULL DEFAULT 0,
  subs_date int(11) unsigned NOT NULL,
  subs_text varchar(255) NOT NULL DEFAULT '',
  subs_person_id int(11) unsigned COMMENT '1:n => person.id',
  datetime_text varchar(255) NOT NULL DEFAULT '',
  url_event_details varchar(1024) NOT NULL DEFAULT '',
  baptism_offer_id tinyint(1) unsigned NOT NULL DEFAULT 0,
  baptism_offer_text varchar(255) NOT NULL DEFAULT '',
  collection int(11) unsigned COMMENT '1:n => collection.id',
  target_groups int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'target_groups (target_groups) count',
  layers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'layers (layers) count',
  rooms int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'rooms (rooms) count',
  files int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'files (files) count',
  image_url varchar(1024) NOT NULL DEFAULT '',
  image_width int(11) unsigned NOT NULL DEFAULT 0,
  image_height int(11) unsigned NOT NULL DEFAULT 0,
  list_image_url varchar(1024) NOT NULL DEFAULT '',

  UNIQUE event_id (event_id),
);

#
# Table structure for table 'tx_verowaimporter_domain_model_person'
#
CREATE TABLE tx_verowaimporter_domain_model_person (
	name varchar(255) NOT NULL DEFAULT '',
  firstname varchar(255) NOT NULL DEFAULT '',
  lastname varchar(255) NOT NULL DEFAULT '',
  person_id int(11) unsigned NOT NULL,
	phone varchar(255) NOT NULL DEFAULT '',
	profession varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
  url varchar(1024) NOT NULL DEFAULT '',
  url_type int(11) unsigned NOT NULL,

  UNIQUE person_id (person_id),
);

#
# Table structure for table 'tx_verowaimporter_domain_model_room'
#
CREATE TABLE tx_verowaimporter_domain_model_room (
  location_name varchar(255) NOT NULL DEFAULT '',
  location_url_is_external smallint(1) unsigned NOT NULL DEFAULT '0',
  location_url varchar(1024) NOT NULL DEFAULT '',
  location_address varchar(255) NOT NULL DEFAULT '',
  location_postcode varchar(255) NOT NULL DEFAULT '',
  location_city varchar(255) NOT NULL DEFAULT '',
  name varchar(255) NOT NULL DEFAULT '',
  id int(11) unsigned NOT NULL,
  order int(11) unsigned NOT NULL,

  UNIQUE id (id),
);
