/**
 * 
 * Powered by Zhangguodong 
 * 
 */

// automatically generated by the FlatBuffers compiler, do not modify

package Jason.Flat.Test
{

	public class Any
	{
		public static const NONE = 0;
		public static const TextureData = 1;
		public static const Texture = 2;

		private static const names:Object = ["NONE", "TextureData", "Texture", ];

		public static function Name(e:int):String
		{
			if(!names.hasOwnProperty(e)){
				throw new Error('Out of Enum Index!');
			return names[e];
		}
	}


}