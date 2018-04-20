ALTER TABLE `models_rfid`
    ADD COLUMN `manual_edit` TINYINT(1) NOT NULL DEFAULT 0,
    CHANGE `record_id` `record_id` int(11) DEFAULT NULL,
    CHANGE `model_id` `model_id` int(11) DEFAULT NULL
