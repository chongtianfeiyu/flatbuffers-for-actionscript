// automatically generated by the FlatBuffers compiler, do not modify

package Test

import (
	flatbuffers "github.com/google/flatbuffers/go"
)
	///文理数据结构
type TextureData struct {
	_tab flatbuffers.Table
}

func GetRootAsTextureData(buf []byte, offset flatbuffers.UOffsetT) *TextureData {
	n := flatbuffers.GetUOffsetT(buf[offset:])
	x := &TextureData{}
	x.Init(buf, n + offset)
	return x
}

func NewTextureData()*TextureData{
	x := &TextureData{}
	return x
}

func (rcv *TextureData) Init(buf []byte, i flatbuffers.UOffsetT) {
	rcv._tab.Bytes = buf
	rcv._tab.Pos = i
}

func (rcv *TextureData) ImageSize() int32 {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(4))
	if o != 0 {
		return rcv._tab.GetInt32(o + rcv._tab.Pos)
	}
	return 0
}

func (rcv *TextureData) ImageData(j int) byte {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(6))
	if o != 0 {
		a := rcv._tab.Vector(o)
		return rcv._tab.GetByte(a + flatbuffers.UOffsetT(j * 1))
	}
	return 0
}

func (rcv *TextureData) ImageDataLength() int {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(6))
	if o != 0 {
		return rcv._tab.VectorLen(o)
	}
	return 0
}

func (rcv *TextureData) ImageDataBytes() []byte {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(6))
	if o != 0 {
		return rcv._tab.ByteVector(o + rcv._tab.Pos)
	}
	return nil
}

func (rcv *TextureData) TestNum2() int32 {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(8))
	if o != 0 {
		return rcv._tab.GetInt32(o + rcv._tab.Pos)
	}
	return 0
}

func (rcv *TextureData) ImageTest() int16 {
	o := flatbuffers.UOffsetT(rcv._tab.Offset(10))
	if o != 0 {
		return rcv._tab.GetInt16(o + rcv._tab.Pos)
	}
	return 0
}

func (rcv *TextureData) Start(builder *flatbuffers.Builder) { builder.StartObject(4) }
func (rcv *TextureData) AddImageSize(builder *flatbuffers.Builder, imageSize int32) { builder.PrependInt32Slot(0, imageSize, 0) }
func (rcv *TextureData) AddImageData(builder *flatbuffers.Builder, imageData flatbuffers.UOffsetT) { builder.PrependUOffsetTSlot(1, flatbuffers.UOffsetT(imageData), 0) }
func (rcv *TextureData) StartImageDataVector(builder *flatbuffers.Builder, numElems int) flatbuffers.UOffsetT { return builder.StartVector(1, numElems, 1)
}
func (rcv *TextureData) AddTestNum2(builder *flatbuffers.Builder, testNum2 int32) { builder.PrependInt32Slot(2, testNum2, 0) }
func (rcv *TextureData) AddImageTest(builder *flatbuffers.Builder, imageTest int16) { builder.PrependInt16Slot(3, imageTest, 0) }
func (rcv *TextureData) End(builder *flatbuffers.Builder) flatbuffers.UOffsetT { return builder.EndObject() }

func (rcv *TextureData) Create(builder *flatbuffers.Builder, imageSize int32, imageData int, testNum2 int32, imageTest int16) flatbuffers.UOffsetT {
	builder.StartObject(4)
	rcv.AddImageSize(builder, imageSize)
	rcv.AddImageData(builder, imageData)
	rcv.AddTestNum2(builder, testNum2)
	rcv.AddImageTest(builder, imageTest)
	return builder.EndObject()
}

