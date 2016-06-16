{*
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
*}
<div id="reservationParticipation">
	<ul class="no-style">
		<li>
			<label for="participantAutocomplete">{translate key="ParticipantList"}</label><br/>
				{translate key=Add} <input type="text" id="participantAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForParticipants" type="button" class="button" style="display:inline">
					<img src="img/user-plus.png"/>
				{translate key='SelectUser'}
				</button>
				<button id="promptForGroupParticipants" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				{translate key='Groups'}
				</button>


			<div id="participantList">
				<ul></ul>
			</div>
			<div id="participantDialog" title="{translate key=AddParticipants}" class="dialog"></div>
			<div id="participantGroupDialog" title="{translate key=AddParticipants}" class="dialog"></div>
		</li>
		<li>
			<label>{translate key="InvitationList"}<br/>
				{translate key=Add} <input type="text" id="inviteeAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForInvitees" type="button" class="button" style="display:inline">
					{html_image src="user-plus.png"}
				{translate key='SelectUser'}
				</button>
				<button id="promptForGroupInvitees" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				{translate key='Groups'}
				</button>
			</label>

			<div id="inviteeList">
				<ul></ul>
			</div>
			<div id="inviteeDialog" title="{translate key=InviteOthers}" class="dialog"></div>
			<div id="inviteeGroupDialog" title="{translate key=InviteOthers}" class="dialog"></div>
		</li>
	</ul>
	<div id="allowParticipation">
		<input type="checkbox" {if $AllowParticipantsToJoin}checked="checked"{/if} {formname key=ALLOW_PARTICIPATION} id="allowParticipationCheckbox"><label for="allowParticipationCheckbox">{translate key=AllowParticipantsToJoin}</label>
	</div>
</div>

<div id="userDialog" class="dialog" title="{translate key=Update}">
	<form id="userForm" method="post" ajaxAction="{ManageUsersActions::UpdateUser}">

		<div class="validationSummary">
			<ul>

			</ul>
		</div>

		<ul>
			<li>{translate key="Username"}</li>
			<li>{textbox name="USERNAME" class="textbox" size="40" id="username"}</li>
			<li>{translate key="Email"}</li>
			<li>{textbox name="EMAIL" class="textbox" size="40" id="email"}</li>

			<li>{translate key="FirstName"}</li>
			<li>{textbox name="FIRST_NAME" class="textbox" size="40" id="fname"}</li>
			<li>{translate key="LastName"}</li>
			<li>{textbox name="LAST_NAME" class="textbox" size="40" id="lname"}</li>

			<li>{translate key="Timezone"}</li>
			<li>
				<select {formname key='TIMEZONE'} id='timezone' class="textbox">
					{html_options values=$Timezones output=$Timezones}
				</select>
			</li>

			<li>{translate key="Phone"}</li>
			<li>{textbox name="PHONE" class="textbox" size="40" id="phone"}</li>
			<li>{translate key="Organization"}</li>
			<li>{textbox name="ORGANIZATION" class="textbox" size="40" id="organization"}</li>
			<li>{translate key="Position"}</li>
			<li>{textbox name="POSITION" class="textbox" size="40" id="position"}</li>
		</ul>
		{assign var=Attributes value=$AttributeList}
		{if $Attributes|count > 0}
			<div id="profileAttributeFields">
				<div class="registrationHeader"><h3>{translate key=AdditionalAttributes}</h3></div>
				{foreach from=$Attributes item=attribute}
				{assign var="attributeValue" value=$user->GetAttributeValue($attribute->Id())}
					<p class="customAttribute">
						{control type="AttributeControl" attribute=$attribute}
					</p>
				{/foreach}
			</div>
		{/if}
		<div class="admin-update-buttons">
			<button type="button" class="button save">{html_image src="disk-black.png"} {translate key='Update'}</button>
			<button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
		</div>
	</form>
</div>
