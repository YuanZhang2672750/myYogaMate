<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MyGame\Example;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Referrable extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Referrable
     */
    public static function getRootAsReferrable(ByteBuffer $bb)
    {
        $obj = new Referrable();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function ReferrableIdentifier()
    {
        return "MONS";
    }

    public static function ReferrableBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::ReferrableIdentifier());
    }

    public static function ReferrableExtension()
    {
        return "mon";
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Referrable
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return ulong
     */
    public function getId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startReferrable(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Referrable
     */
    public static function createReferrable(FlatBufferBuilder $builder, $id)
    {
        $builder->startObject(1);
        self::addId($builder, $id);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addId(FlatBufferBuilder $builder, $id)
    {
        $builder->addUlongX(0, $id, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endReferrable(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
