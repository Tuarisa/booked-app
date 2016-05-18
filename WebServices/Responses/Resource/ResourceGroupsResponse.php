<?php
/**
Copyright 2012-2015 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lib/WebService/namespace.php');

class ResourceGroupsResponse extends RestResponse
{
	/**
	 * @var array|ResourceResponse[]
	 */
	public $resourcegroups;

	/**
	 * @param IRestServer $server
	 * @param array $resourcegroups
	 */
	public function __construct(IRestServer $server, $resourcegroups)
	{
		foreach ($resourcegroups as $resourcegroup)
		{
			// is there a reason why we would not use the id's as array keys/object fields?
			// it certainly makes things much easier client side
			$this->resourcegroups[$resourcegroup->id] = new ResourceGroupResponse($server, $resourcegroup);
		}
	}

	public static function Example()
	{
		return new ExampleResourceGroupsResponse();
	}
}

class ExampleResourceGroupsResponse extends ResourceGroupsResponse
{
	public function __construct()
	{
		$this->resources = array(ResourceGroupResponse::Example());
	}
}

?>