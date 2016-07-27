// automatically generated by the FlatBuffers compiler, do not modify

package Jason.Flat.Test;

import java.nio.*;
import java.lang.*;
import java.util.*;
import com.google.flatbuffers.*;

@SuppressWarnings("unused")
/**
	 *文理数据结构
 */
public final class TextureData extends Table {
  public static TextureData getRootAsTextureData(ByteBuffer _bb) { return getRootAsTextureData(_bb, new TextureData()); }
  public static TextureData getRootAsTextureData(ByteBuffer _bb, TextureData obj) { _bb.order(ByteOrder.LITTLE_ENDIAN); return (obj.__init(_bb.getInt(_bb.position()) + _bb.position(), _bb)); }
  public TextureData __init(int _i, ByteBuffer _bb) { bb_pos = _i; bb = _bb; return this; }

  public int imageSize() { int o = __offset(4); return o != 0 ? bb.getInt(o + bb_pos) : 0; }
  public boolean mutateImageSize(int image_size) { int o = __offset(4); if (o != 0) { bb.putInt(o + bb_pos, image_size); return true; } else { return false; } }
  public int imageData(int j) { int o = __offset(6); return o != 0 ? bb.get(__vector(o) + j * 1) & 0xFF : 0; }
  public int imageDataLength() { int o = __offset(6); return o != 0 ? __vector_len(o) : 0; }
  public ByteBuffer imageDataAsByteBuffer() { return __vector_as_bytebuffer(6, 1); }
  public boolean mutateImageData(int j, int image_data) { int o = __offset(6); if (o != 0) { bb.put(__vector(o) + j * 1, (byte)image_data); return true; } else { return false; } }
  public int testNum2() { int o = __offset(8); return o != 0 ? bb.getInt(o + bb_pos) : 0; }
  public boolean mutateTestNum2(int test_num2) { int o = __offset(8); if (o != 0) { bb.putInt(o + bb_pos, test_num2); return true; } else { return false; } }
  public short imageTest() { int o = __offset(10); return o != 0 ? bb.getShort(o + bb_pos) : 0; }
  public boolean mutateImageTest(short image_test) { int o = __offset(10); if (o != 0) { bb.putShort(o + bb_pos, image_test); return true; } else { return false; } }

  public static int createTextureData(FlatBufferBuilder builder,
      int image_size,
      int image_dataOffset,
      int test_num2,
      short image_test) {
    builder.startObject(4);
    TextureData.addTestNum2(builder, test_num2);
    TextureData.addImageData(builder, image_dataOffset);
    TextureData.addImageSize(builder, image_size);
    TextureData.addImageTest(builder, image_test);
    return TextureData.endTextureData(builder);
  }

  public static void startTextureData(FlatBufferBuilder builder) { builder.startObject(4); }
  public static void addImageSize(FlatBufferBuilder builder, int imageSize) { builder.addInt(0, imageSize, 0); }
  public static void addImageData(FlatBufferBuilder builder, int imageDataOffset) { builder.addOffset(1, imageDataOffset, 0); }
  public static int createImageDataVector(FlatBufferBuilder builder, byte[] data) { builder.startVector(1, data.length, 1); for (int i = data.length - 1; i >= 0; i--) builder.addByte(data[i]); return builder.endVector(); }
  public static void startImageDataVector(FlatBufferBuilder builder, int numElems) { builder.startVector(1, numElems, 1); }
  public static void addTestNum2(FlatBufferBuilder builder, int testNum2) { builder.addInt(2, testNum2, 0); }
  public static void addImageTest(FlatBufferBuilder builder, short imageTest) { builder.addShort(3, imageTest, 0); }
  public static int endTextureData(FlatBufferBuilder builder) {
    int o = builder.endObject();
    return o;
  }
}

