{*
Copyright 2015 Nick Korbel

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
*}

{if $CanViewUser}
<div id="userDetailsPopup">
	<div id="userDetailsName">{fullname first=$User->FirstName() last=$User->LastName() ignorePrivacy=true}</div>
	<div data-id="fname" data-val="{$User->FirstName()}"></div>
	<div data-id="lname" data-val="{$User->LastName()}"></div>
	<div id="userDetailsEmail" data-id="email" data-val ="{$User->EmailAddress()}"><span class="label">{translate key=Email}</span> <a href="mailto:{$User->EmailAddress()}">{$User->EmailAddress()}</a></div>
	<div id="userDetailsPhone" data-id="phone" data-val ="{$User->GetAttribute(UserAttribute::Phone)}"><span class="label">{translate key=Phone}</span> <a href="tel:{$User->GetAttribute(UserAttribute::Phone)}">{$User->GetAttribute(UserAttribute::Phone)}</a></div>
	<div id="userDetailsOrganization" data-id="organization" data-val="{$User->GetAttribute(UserAttribute::Organization)}"><span class="label">{translate key=Organization}</span> {$User->GetAttribute(UserAttribute::Organization)}</div>
	<div id="userDetailsPosition" data-id="position" data-val="{$User->GetAttribute(UserAttribute::Position)}"><span class="label">{translate key=Position}</span> {$User->GetAttribute(UserAttribute::Position)}</div>
	<div id="userDetailsAttributes">
	{foreach from=$Attributes item=attribute}
		<div class="customAttribute" data-id = "psiattribute{$attribute->Id()}" data-val="{$User->GetAttributeValue($attribute->Id())}"><span class="label">{$attribute->Label()}</span> {$User->GetAttributeValue($attribute->Id())}</div>
	{/foreach}
	</div>
</div>
{else}
	Unauthorized
{/if}
