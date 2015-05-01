<?php

namespace XeroPHP\Models\Accounting\Contact;

use XeroPHP\Remote;


class ContactPerson extends Remote\Object {

    /**
     * First name of person
     *
     * @property string FirstName
     */

    /**
     * Last name of person
     *
     * @property string LastName
     */

    /**
     * Email address of person
     *
     * @property string EmailAddress
     */

    /**
     * boolean to indicate whether contact should be included on emails with invoices etc.
     *
     * @property bool IncludeInEmails
     */

    /**
     * This is a read only identifier which is generated by Xero when a contact is created either in the
     * application or via the API. i.e. You cannot specify this element when creating a new contact
     *
     * @property string ContactID
     */

    /**
     * This can be updated via the API only i.e. This field is read only on the Xero contact screen
     *
     * @property string ContactNumber
     */

    /**
     * This can be updated via API or in the contact record in Xero
     *
     * @property string Name
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ContactPerson';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ContactPerson';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return '';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties() {
        return array(
            'FirstName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmailAddress' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'IncludeInEmails' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'ContactID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ContactNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getFirstName() {
        return $this->_data['FirstName'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setFirstName($value) {
        $this->propertyUpdated('FirstName', $value);
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return $this->_data['LastName'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setLastName($value) {
        $this->propertyUpdated('LastName', $value);
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress() {
        return $this->_data['EmailAddress'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setEmailAddress($value) {
        $this->propertyUpdated('EmailAddress', $value);
        $this->_data['EmailAddress'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInEmails() {
        return $this->_data['IncludeInEmails'];
    }

    /**
     * @param bool $value
     * @return ContactPerson
     */
    public function setIncludeInEmail($value) {
        $this->propertyUpdated('IncludeInEmails', $value);
        $this->_data['IncludeInEmails'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactID() {
        return $this->_data['ContactID'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setContactID($value) {
        $this->propertyUpdated('ContactID', $value);
        $this->_data['ContactID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactNumber() {
        return $this->_data['ContactNumber'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setContactNumber($value) {
        $this->propertyUpdated('ContactNumber', $value);
        $this->_data['ContactNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return ContactPerson
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }


}