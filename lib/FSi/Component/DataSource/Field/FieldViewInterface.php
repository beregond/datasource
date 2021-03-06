<?php

/**
 * (c) Fabryka Stron Internetowych sp. z o.o <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\DataSource\Field;

use FSi\Component\DataSource\DataSourceViewInterface;
use FSi\Component\DataSource\Field\FieldTypeInterface;
use FSi\Component\DataSource\Util\AttributesContainerInterface;

/**
 * View of field, responsible for keeping some options needed during view rendering.
 */
interface FieldViewInterface extends AttributesContainerInterface
{
    /**
     * Constructor.
     *
     * @param FieldTypeInterface $field
     */
    public function __construct(FieldTypeInterface $field);

    /**
     * Return field's name.
     *
     * @return string
     */
    public function getName();

    /**
     * Return field's type.
     *
     * @return string
     */
    public function getType();

    /**
     * Returns type of comparison for this field
     *
     * @return string
     */
    public function getComparison();

    /**
     * Returns current parameter value bound to this field
     *
     * @return string
     */
    public function getParameter();

    /**
     * Sets DataSource view.
     *
     * @param DataSourceViewInterface $dataSourceView
     */
    public function setDataSourceView(DataSourceViewInterface $dataSourceView);

    /**
     * Return assigned DataSource view.
     *
     * @return DataSourceViewInterface
     */
    public function getDataSourceView();
}