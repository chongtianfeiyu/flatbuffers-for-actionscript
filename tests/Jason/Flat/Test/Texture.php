<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace Jason\Flat\Test;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

	///文理结构
class Texture extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Texture
     */
    public static function getRootAsTexture(ByteBuffer $bb)
    {
        $obj = new Texture();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Texture
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getTextureName()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return short
     */
    public function getNumTextures()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getShort($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getTextures($j)
    {
        $o = $this->__offset(8);
        $obj = new TextureData();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getTexturesLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return short
     */
    public function getNumTest()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getShort($o + $this->bb_pos) : 30;
    }

    /**
     * @return short
     */
    public function getNumTest2()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getShort($o + $this->bb_pos) : 0;
    }

    public function getTestAppend()
    {
        $obj = new TestAppend();
        $o = $this->__offset(16);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startTexture(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Texture
     */
    public static function createTexture(FlatBufferBuilder $builder, $texture_name, $num_textures, $textures, $num_test, $num_test2, $test_append)
    {
        $builder->startObject(7);
        self::addTextureName($builder, $texture_name);
        self::addNumTextures($builder, $num_textures);
        self::addTextures($builder, $textures);
        self::addNumTest($builder, $num_test);
        self::addNumTest2($builder, $num_test2);
        self::addTestAppend($builder, $test_append);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addTextureName(FlatBufferBuilder $builder, $textureName)
    {
        $builder->addOffsetX(0, $textureName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param short
     * @return void
     */
    public static function addNumTextures(FlatBufferBuilder $builder, $numTextures)
    {
        $builder->addShortX(1, $numTextures, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addTextures(FlatBufferBuilder $builder, $textures)
    {
        $builder->addOffsetX(2, $textures, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createTexturesVector(FlatBufferBuilder $builder, array $data)
    {
        $builder->startVector(4, count($data), 4);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $builder->addOffset($data[$i]);
        }
        return $builder->endVector();
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int $numElems
     * @return void
     */
    public static function startTexturesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param short
     * @return void
     */
    public static function addNumTest(FlatBufferBuilder $builder, $numTest)
    {
        $builder->addShortX(3, $numTest, 30);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param short
     * @return void
     */
    public static function addNumTest2(FlatBufferBuilder $builder, $numTest2)
    {
        $builder->addShortX(5, $numTest2, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addTestAppend(FlatBufferBuilder $builder, $testAppend)
    {
        $builder->addOffsetX(6, $testAppend, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endTexture(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public static function finishTextureBuffer(FlatBufferBuilder $builder, $offset)
    {
        $builder->finish($offset);
    }
}
