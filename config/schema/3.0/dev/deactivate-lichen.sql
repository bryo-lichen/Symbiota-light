ALTER TABLE `users` 
  CHANGE COLUMN `password` `password_off` VARCHAR(255) NULL DEFAULT NULL ;

ALTER TABLE `users` 
  ADD COLUMN `password` VARCHAR(255) NULL AFTER `username`;

UPDATE `users`
SET password = password_off
WHERE uid IN(2,13,3485);