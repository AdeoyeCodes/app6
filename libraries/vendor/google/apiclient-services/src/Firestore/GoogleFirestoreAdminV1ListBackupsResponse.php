<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Firestore;

class GoogleFirestoreAdminV1ListBackupsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * @var GoogleFirestoreAdminV1Backup[]
   */
  public $backups;
  protected $backupsType = GoogleFirestoreAdminV1Backup::class;
  protected $backupsDataType = 'array';
  /**
   * @var string[]
   */
  public $unreachable;

  /**
   * @param GoogleFirestoreAdminV1Backup[]
   */
  public function setBackups($backups)
  {
    $this->backups = $backups;
  }
  /**
   * @return GoogleFirestoreAdminV1Backup[]
   */
  public function getBackups()
  {
    return $this->backups;
  }
  /**
   * @param string[]
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirestoreAdminV1ListBackupsResponse::class, 'Google_Service_Firestore_GoogleFirestoreAdminV1ListBackupsResponse');
