-- Add branch_id column to newsletter_pdfs table
ALTER TABLE `newsletter_pdfs` 
ADD COLUMN `branch_id` INT(11) NULL DEFAULT NULL AFTER `id`,
ADD INDEX `idx_branch_id` (`branch_id`);
