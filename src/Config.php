<?php
declare(strict_types=1);

namespace Plaisio\Config;

/**
 * Interface for retrieving values of configuration parameters.
 */
interface Config
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory array configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return array
   */
  public function manArray(int $cfgId): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory boolean configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return bool
   */
  public function manBool(int $cfgId): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory finite float configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return float
   */
  public function manFiniteFloat(int $cfgId): float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory float configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return float
   */
  public function manFloat(int $cfgId): float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory integer configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return int
   */
  public function manInt(int $cfgId): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory string configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return string
   */
  public function manString(int $cfgId): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional array configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return array
   */
  public function optArray(int $cfgId): ?array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional boolean configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return bool|null
   */
  public function optBool(int $cfgId): ?bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional finite float configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return float|null
   */
  public function optFiniteFloat(int $cfgId): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional float configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return float|null
   */
  public function optFloat(int $cfgId): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional integer configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return int|null
   */
  public function optInt(int $cfgId): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional string configuration parameter.
   *
   * @param int $cfgId The ID of the configuration parameter.
   *
   * @return string|null
   */
  public function optString(int $cfgId): ?string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
