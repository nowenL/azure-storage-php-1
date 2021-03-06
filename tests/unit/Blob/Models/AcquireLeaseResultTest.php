<?php

/**
 * LICENSE: The MIT License (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * https://github.com/azure/azure-storage-php/LICENSE
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Tests\Unit\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @link      https://github.com/azure/azure-storage-php
 */
namespace MicrosoftAzure\Storage\Tests\Unit\Blob\Models;
use MicrosoftAzure\Storage\Blob\Models\AcquireLeaseResult;

/**
 * Unit tests for class AcquireLeaseResult
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Tests\Unit\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @version   Release: 0.10.0
 * @link      https://github.com/azure/azure-storage-php
 */
class AcquireLeaseResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\AcquireLeaseResult::create
     */
    public function testCreate()
    {
        // Setup
        $expected = '10';
        $headers = array('x-ms-lease-id' => $expected);
        
        // Test
        $result = AcquireLeaseResult::create($headers);
        
        // Assert
        $this->assertEquals($expected, $result->getLeaseId());
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\AcquireLeaseResult::setLeaseId
     * @covers MicrosoftAzure\Storage\Blob\Models\AcquireLeaseResult::getLeaseId
     */
    public function testSetLeaseId()
    {
        // Setup
        $expected = '0x8CAFB82EFF70C46';
        $result = new AcquireLeaseResult();
        $result->setLeaseId($expected);
        
        // Test
        $result->setLeaseId($expected);
        
        // Assert
        $this->assertEquals($expected, $result->getLeaseId());
    }
}


