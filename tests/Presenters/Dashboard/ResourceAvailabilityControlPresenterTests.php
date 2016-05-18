<?php
/**
 * Copyright 2015 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'Presenters/Dashboard/ResourceAvailabilityControlPresenter.php');

class ResourceAvailabilityControlPresenterTests extends TestBase
{
	/**
	 * @var FakeReservationViewRepository
	 */
	private $reservationRepo;

	/**
	 * @var FakeResourceAvailabilityControl
	 */
	private $control;

	/**
	 * @var ResourceAvailabilityControlPresenter
	 */
	private $presenter;

	/**
	 * @var FakeResourceService
	 */
	private $resourceService;

	/**
	 * @var ResourceDto
	 */
	private $unavailableResource;

	/**
	 * @var ResourceDto
	 */
	private $availableResource;

	/**
	 * @var ResourceDto
	 */
	private $unavailableAllDayResource;

	public function setup()
	{
		parent::setup();

		$this->control = new FakeResourceAvailabilityControl();
		$this->resourceService = new FakeResourceService();
		$this->reservationRepo = new FakeReservationViewRepository();
		$this->presenter = new ResourceAvailabilityControlPresenter($this->control, $this->resourceService, $this->reservationRepo);

		$this->unavailableResource = new TestResourceDto(1, '1');
		$this->availableResource = new TestResourceDto(2, '2');
		$this->unavailableAllDayResource = new TestResourceDto(3, '3');
	}

	public function testSetsResourceAvailability()
	{
		$this->PopulateResources();
		$this->PopulateReservations();

		$this->presenter->PageLoad($this->fakeUser);

		$this->assertEquals(new AvailableDashboardItem($this->availableResource, $this->reservationRepo->_ReservationList[3]),
							$this->control->_AvailableNow[0]);
		$this->assertEquals(new UnavailableDashboardItem($this->unavailableResource, $this->reservationRepo->_ReservationList[1]),
							$this->control->_UnavailableNow[0]);
		$this->assertEquals(new UnavailableDashboardItem($this->unavailableAllDayResource, $this->reservationRepo->_ReservationList[2]),
							$this->control->_UnavailableAllDay[0]);
	}

	private function PopulateResources()
	{
		$this->resourceService->_AllResources = array(
				$this->unavailableResource,
				$this->availableResource,
				$this->unavailableAllDayResource,
		);
	}

	private function PopulateReservations()
	{
		$this->reservationRepo->_ReservationList = array(
				new TestReservationItemView(1, Date::Now()->AddHours(-1), Date::Now()->AddHours(1), $this->unavailableResource->GetId()),
				new TestReservationItemView(2, Date::Now()->AddHours(1), Date::Now()->AddHours(2), $this->unavailableResource->GetId()),
				new TestReservationItemView(3, Date::Now()->AddDays(-1), Date::Now()->AddDays(1), $this->unavailableAllDayResource->GetId()),
				new TestReservationItemView(4, Date::Now()->AddDays(1), Date::Now()->AddDays(2), $this->availableResource->GetId()),
		);
	}

}

class FakeResourceAvailabilityControl implements IResourceAvailabilityControl
{
	/**
	 * @var AvailableDashboardItem[]
	 */
	public $_AvailableNow;

	/**
	 * @var UnavailableDashboardItem[]
	 */
	public $_UnavailableNow;

	/**
	 * @var UnavailableDashboardItem[]
	 */
	public $_UnavailableAllDay;

	/**
	 * @param AvailableDashboardItem[] $items
	 */
	public function SetAvailable($items)
	{
		$this->_AvailableNow = $items;
	}

	/**
	 * @param UnavailableDashboardItem[] $items
	 */
	public function SetUnavailable($items)
	{
		$this->_UnavailableNow = $items;
	}

	/**
	 * @param UnavailableDashboardItem[] $items
	 */
	public function SetUnavailableAllDay($items)
	{
		$this->_UnavailableAllDay = $items;
	}
}