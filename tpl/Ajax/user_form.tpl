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
<div id="userDialog" class="dialog" title="{translate key=Update}">
    <form id="userForm" method="post" ajaxAction="updateUser">

        <div class="validationSummary">
            <ul>

            </ul>
        </div>

        <ul>
            {assign var=uname value=$User->Username()}
            <li>{translate key="Username"}</li>
            <li>{textbox name="USERNAME" class="textbox" size="40" id="username" value=uname}</li>
            <li>{translate key="Email"}</li>
            {assign var=email value=$User->EmailAddress()}
            <li>{textbox name="EMAIL" class="textbox" size="40" id="email" value =email}</li>

            <li>{translate key="FirstName"}</li>
            {assign var=firstname value=$User->FirstName()}
            <li>{textbox name="FIRST_NAME" class="textbox" size="40" id="fname" value=firstname }</li>
            <li>{translate key="LastName"}</li>
            {assign var=lastname value=$User->LastName()}
            <li>{textbox name="LAST_NAME" class="textbox" size="40" id="lname" value=lastname}</li>

            <li>{translate key="Phone"}</li>
            {assign var=phone value=$User->GetAttribute(UserAttribute::Phone)}
            <li>{textbox name="PHONE" class="textbox" size="40" id="phone" value = phone}</li>
            <li>{translate key="Organization"}</li>
            {assign var=organization value=$User->GetAttribute(UserAttribute::Organization)}
            <li>{textbox name="ORGANIZATION" class="textbox" size="40" id="organization" value=organization}</li>
            <li>{translate key="Position"}</li>
            {assign var=position value=$User->GetAttribute(UserAttribute::Position)}
            <li>{textbox name="POSITION" class="textbox" size="40" id="position" value = position}</li>
        </ul>
        {if $Attributes|count > 0}
            <div id="profileAttributeFields">
                <div class="registrationHeader"><h3>{translate key=AdditionalAttributes}</h3></div>
                {foreach from=$Attributes item=attribute}
                {assign var="attributeValue" value=$User->GetAttributeValue($attribute->Id())}
                    <p class="customAttribute">
                        {control type="AttributeControl" attribute=$attribute value=$attributeValue}
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

{else}
    Unauthorized
{/if}
