-- =====================================================
-- SQL Queries to Add Country Code Fields to Database
-- Kidzonia International Website
-- =====================================================
-- Run these queries to add phone_country_code and mobile_country_code
-- columns to all enquiry tables
-- =====================================================

-- 1. Add phone_country_code to tables with 'phone' field
-- =====================================================

-- Call Back Enquiry Table
ALTER TABLE `call_back_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Admission Enquiry Table
ALTER TABLE `admission_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Temp Admission Table
ALTER TABLE `temp_admission` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Contact Enquiry Table
ALTER TABLE `contact_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- YouTube Enquiry Table
ALTER TABLE `youtube_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Register Event Table
ALTER TABLE `register_event` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Career Enquiry Table
ALTER TABLE `career_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- Summer Camp Enquiry Table
ALTER TABLE `summer_camp_enquiry` 
ADD COLUMN `phone_country_code` VARCHAR(5) DEFAULT '+91' AFTER `phone`;

-- =====================================================
-- 2. Add mobile_country_code to tables with 'mobile' field
-- =====================================================

-- Brochure Enquiry Table
ALTER TABLE `brochure` 
ADD COLUMN `mobile_country_code` VARCHAR(5) DEFAULT '+91' AFTER `mobile`;

-- =====================================================
-- 3. Update KCIS Database (kcis_db) - Leads Table
-- =====================================================
-- Note: This is in a separate database (kcis_db)
-- Run this query in the kcis_db database

ALTER TABLE `leads` 
ADD COLUMN `mobile_country_code` VARCHAR(5) DEFAULT '+91' AFTER `mobile`;

-- =====================================================
-- 4. Update existing records to set default country code
-- =====================================================
-- These queries will set '+91' as default for all existing records
-- that don't have a country code set

UPDATE `call_back_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `admission_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `temp_admission` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `contact_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `youtube_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `register_event` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `career_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `summer_camp_enquiry` 
SET `phone_country_code` = '+91' 
WHERE `phone_country_code` IS NULL OR `phone_country_code` = '';

UPDATE `brochure` 
SET `mobile_country_code` = '+91' 
WHERE `mobile_country_code` IS NULL OR `mobile_country_code` = '';

-- For kcis_db database
UPDATE `leads` 
SET `mobile_country_code` = '+91' 
WHERE `mobile_country_code` IS NULL OR `mobile_country_code` = '';

-- =====================================================
-- 5. Optional: Add indexes for better query performance
-- =====================================================

-- Add indexes on country code columns (optional but recommended)
-- ALTER TABLE `call_back_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `admission_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `temp_admission` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `contact_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `youtube_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `register_event` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `career_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `summer_camp_enquiry` ADD INDEX `idx_phone_country_code` (`phone_country_code`);
-- ALTER TABLE `brochure` ADD INDEX `idx_mobile_country_code` (`mobile_country_code`);
-- ALTER TABLE `leads` ADD INDEX `idx_mobile_country_code` (`mobile_country_code`);

-- =====================================================
-- END OF MIGRATION SCRIPT
-- =====================================================

