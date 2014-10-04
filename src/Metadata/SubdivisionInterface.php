<?php

namespace CommerceGuys\Addressing\Metadata;

/**
 * Interface for country subdivisons.
 *
 * Subdivisions are hierarchical and can have up to three levels:
 * Administrative Area -> Locality -> Dependent Locality.
 */
interface SubdivisionInterface
{
    /**
     * Gets the subdivision parent.
     *
     * @return SubdivisionInterface|null The parent, or NULL if there is none.
     */
    public function getParent();

    /**
     * Sets the subdivision parent.
     *
     * @param SubdivisionInterface $parent The subdivision parent.
     */
    public function setParent(SubdivisionInterface $parent);

    /**
     * Gets the two-letter country code.
     *
     * This is a CLDR country code, since CLDR includes additional countries
     * for addressing purposes, such as Canary Islands (IC).
     *
     * @return string The two-letter country code.
     */
    public function getCountryCode();

    /**
     * Sets the two-letter country code.
     *
     * @param string $countryCode The two-letter country code.
     */
    public function setCountryCode($countryCode);

    /**
     * Gets the subdivision id.
     *
     * @return string The subdivision id.
     */
    public function getId();

    /**
     * Sets the subdivision id.
     *
     * @param string $id The subdivision id.
     */
    public function setId($id);

    /**
     * Gets the subdivision code.
     *
     * Represents the subdivision on the envelope.
     * For example: "CA" for California.
     *
     * The code will be in the local (non-latin) script if the country uses one.
     *
     * @return string The subdivision code.
     */
    public function getCode();

    /**
     * Sets the subdivision code.
     *
     * @param string $code The subdivision code.
     */
    public function setCode($code);

    /**
     * Gets the subdivision name.
     *
     * @return string The subdivision name.
     */
    public function getName();

    /**
     * Sets the subdivision name.
     *
     * @param string $name The subdivision name.
     */
    public function setName($name);

    /**
     * Gets the postal code pattern.
     *
     * This is a regular expression pattern used to validate postal codes,
     * ensuring that a postal code begins with the expected characters.
     *
     * @return string|null The postal code pattern.
     */
    public function getPostalCodePattern();

    /**
     * Sets the postal code pattern.
     *
     * @param string $postalCodePattern The postal code pattern.
     */
    public function setPostalCodePattern($postalCodePattern);

    /**
     * Gets the subdivision children.
     *
     * @return SubdivisionInterface[] The subdivision children.
     */
    public function getChildren();

    /**
     * Sets the subdivision children.
     *
     * @param SubdivisionInterface[] $children The subdivision children.
     */
    public function setChildren($children);

    /**
     * Checks whether the subdivision has children.
     *
     * @return bool TRUE if the subdivision has children, FALSE otherwise.
     */
    public function hasChildren();

    /**
     * Gets the locale.
     *
     * @return string The locale.
     */
    public function getLocale();

    /**
     * Sets the locale.
     *
     * @param string $locale The locale.
     *
     * @return $this
     */
    public function setLocale($locale);

    /**
     * Gets the metadata repository.
     *
     * @return AddressMetadataRepositoryInterface The metadata repository.
     */
    public static function getRepository();

    /**
     * Sets the metadata repository.
     *
     * @param AddressMetadataRepositoryInterface $repository The metadata repository.
     */
    public static function setRepository(AddressMetadataRepositoryInterface $repository);
}
