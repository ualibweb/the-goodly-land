<?php
/**
 * The literary map page template.
 */

get_header();

if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_title('<h2>', '</h2>');
    the_content();
  endwhile;
endif;

?>

<p id="no-map-message">The literary map is not available on this screen size. Please visit this page on a device with a larger screen to use the literary map.</p>

<map id="hex1" name="hex1"><area alt="Mobile" coords="8,556, 8,540, 14,540, 20,539, 20,535, 57,535, 58,534, 60,533, 61,533, 62,534, 64,534, 66,535, 66,537, 65,538, 65,540, 64,541, 62,543, 63,544, 64,546, 65,546, 66,547, 65,548, 65,549, 64,550, 63,555, 63,560, 65,562, 67,564, 64,567, 60,571, 60,573, 62,574, 64,576, 64,578, 65,579, 64,579, 64,580, 62,580, 59,582, 56,584, 56,591, 50,619, 43,647, 32,643, 21,638, 16,639, 11,640, 10,616, 9,593, 9,574, 8,556" href="county?CountyName=Mobile" shape="polygon"> <area alt="Coffee" coords="318,525, 303,525, 295,526, 279,526, 274,527, 272,527, 272,516, 271,509, 271,484, 270,482, 270,480, 275,480, 275,478, 276,478, 276,479, 277,479, 277,475, 276,473, 276,468, 281,468, 284,467, 317,467, 317,476, 318,485, 318,525" href="county?CountyName=Coffee" shape="polygon"> <area alt="Conecuh" coords="212,527, 211,527, 210,528, 209,528, 209,529, 208,528, 207,527, 204,527, 203,524, 203,519, 204,518, 165,518, 126,519, 128,517, 130,514, 131,513, 133,512, 134,510, 136,507, 139,504, 142,500, 143,499, 145,498, 147,496, 150,493, 151,493, 153,492, 155,488, 156,484, 157,482, 157,479, 158,476, 160,473, 160,470, 161,466, 163,466, 166,465, 168,464, 170,462, 169,460, 169,458, 170,457, 174,457, 180,454, 186,451, 186,461, 187,471, 188,472, 189,473, 190,476, 191,479, 193,480, 195,482, 211,482, 211,494, 214,494, 215,497, 216,500, 215,502, 215,503, 213,505, 211,507, 212,517, 212,527" href="county?CountyName=Conecuh" shape="polygon"> <area alt="Bullock" coords="360,392, 360,394, 358,394, 358,411, 355,411, 355,410, 353,410, 353,411, 348,411, 348,414, 340,414, 336,422, 331,431, 316,431, 316,419, 306,419, 306,416, 305,416, 304,415, 304,412, 303,408, 302,408, 302,407, 299,406, 296,406, 296,409, 294,409, 294,408, 292,408, 291,394, 291,380, 292,380, 292,377, 302,377, 302,373, 304,374, 306,375, 306,377, 305,380, 307,381, 308,382, 332,382, 357,381, 357,392, 358,392, 360,391, 360,392" href="county?CountyName=Bullock" shape="polygon"> <area alt="Lowndes" coords="239,421, 215,421, 191,422, 191,416, 192,410, 185,410, 185,386, 197,386, 197,384, 194,384, 192,382, 190,380, 192,377, 194,374, 193,373, 192,372, 192,371, 193,370, 194,370, 196,369, 196,373, 198,373, 199,372, 200,371, 200,370, 201,368, 200,367, 199,366, 199,364, 200,362, 202,362, 203,363, 205,362, 206,361, 206,364, 207,367, 210,367, 212,366, 214,364, 215,362, 215,360, 217,360, 219,361, 219,365, 221,366, 223,366, 224,365, 225,364, 226,365, 228,366, 228,369, 231,369, 233,368, 233,369, 234,370, 235,371, 235,373, 234,374, 234,376, 235,378, 237,378, 238,379, 239,380, 240,380, 242,381, 244,382, 244,395, 245,409, 245,420, 242,420, 239,421" href="county?CountyName=Lowndes" shape="polygon"> <area alt="Perry" coords="121,375, 114,375, 114,327, 119,327, 119,315, 120,307, 120,303, 125,303, 125,297, 132,297, 136,298, 138,298, 138,303, 172,303, 172,321, 171,322, 170,323, 170,327, 169,329, 169,331, 170,333, 170,335, 169,336, 168,336, 166,337, 165,338, 165,343, 163,346, 162,349, 161,350, 156,350, 143,351, 125,351, 126,355, 126,375, 121,375" href="county?CountyName=Perry" shape="polygon"> <area alt="Sumter" coords="66,375, 9,376, 13,338, 18,291, 20,282, 39,282, 40,286, 38,286, 38,289, 36,289, 35,292, 36,292, 37,298, 40,300, 38,303, 41,304, 44,304, 46,307, 51,308, 49,311, 46,310, 46,316, 48,317, 49,319, 45,321, 45,322, 48,324, 52,322, 54,323, 52,326, 52,329, 49,331, 52,336, 57,336, 63,333, 65,331, 71,333, 75,333, 77,336, 75,337, 74,335, 72,336, 73,340, 73,343, 75,345, 76,347, 71,346, 66,350, 64,353, 59,355, 59,356, 55,359, 54,366, 60,370, 62,370, 65,372, 66,375" href="county?CountyName=Sumter" shape="polygon"> <area alt="Chambers" coords="337,313, 336,305, 336,287, 335,269, 335,261, 341,260, 356,260, 370,259, 376,259, 377,264, 380,276, 382,288, 383,293, 384,294, 384,297, 385,300, 386,301, 386,302, 388,304, 389,305, 390,306, 390,307, 389,308, 389,309, 390,309, 390,310, 382,310, 376,311, 373,311, 373,312, 366,312, 361,313, 358,313, 358,311, 355,311, 355,313, 352,313, 350,312, 347,312, 343,313, 337,313" href="county?CountyName=Chambers" shape="polygon"> <area alt="Talladega" coords="232,263, 233,261, 235,261, 235,259, 232,257, 231,252, 233,250, 235,250, 234,246, 235,244, 238,244, 239,243, 238,239, 243,239, 246,236, 245,233, 246,230, 248,229, 247,227, 244,223, 248,220, 255,208, 256,207, 257,210, 259,209, 260,206, 265,203, 265,202, 263,199, 262,198, 265,196, 264,193, 267,191, 268,189, 267,186, 263,183, 266,182, 268,184, 281,184, 281,186, 283,188, 284,190, 285,192, 285,194, 287,194, 287,195, 310,195, 310,201, 303,208, 298,208, 297,214, 296,214, 296,222, 294,222, 294,224, 289,224, 290,236, 274,236, 274,250, 268,250, 268,263, 232,263" href="county?CountyName=Talladega" shape="polygon"> <area alt="Lamar" coords="64,152, 64,180, 65,190, 65,207, 53,207, 46,206, 27,206, 27,201, 28,197, 28,192, 29,187, 30,182, 30,176, 31,171, 32,164, 33,156, 34,148, 35,141, 35,134, 60,134, 60,138, 64,138, 64,152" href="county?CountyName=Lamar" shape="polygon"> <area alt="Etowah" coords="251,125, 263,114, 273,112, 273,111, 302,110, 303,122, 305,121, 307,119, 308,120, 309,124, 316,138, 316,146, 306,145, 303,144, 303,145, 299,145, 299,147, 298,147, 297,152, 294,152, 294,150, 291,150, 291,151, 289,151, 289,153, 288,153, 288,155, 287,155, 287,158, 284,158, 284,159, 280,160, 279,158, 275,158, 273,154, 270,154, 269,151, 267,151, 266,146, 263,142, 260,142, 257,145, 255,145, 255,142, 254,142, 249,148, 249,151, 247,152, 244,150, 247,144, 248,133, 251,125" href="county?CountyName=Etowah" shape="polygon"> <area alt="Cullman" coords="159,142, 159,98, 230,98, 230,100, 233,100, 233,102, 234,103, 230,104, 227,104, 226,105, 225,106, 226,107, 226,108, 224,110, 222,112, 222,113, 223,114, 221,117, 218,119, 218,121, 217,123, 216,123, 216,124, 215,123, 214,123, 214,124, 213,125, 212,125, 212,127, 210,128, 208,129, 207,128, 207,127, 206,128, 207,130, 208,132, 206,132, 206,135, 204,135, 203,138, 202,141, 200,142, 199,142, 198,144, 197,146, 195,147, 192,147, 192,149, 191,149, 190,148, 189,149, 189,150, 186,150, 185,151, 185,152, 183,152, 182,153, 181,154, 180,155, 181,156, 181,158, 180,159, 178,160, 174,160, 173,159, 172,158, 172,157, 167,157, 162,156, 162,153, 161,151, 160,150, 159,146, 159,142" href="county?CountyName=Cullman" shape="polygon"> <area alt="Jackson" coords="248,2, 273,2, 297,1, 326,1, 328,10, 330,19, 328,20, 327,21, 326,22, 325,24, 324,28, 323,31, 322,33, 321,35, 319,35, 317,36, 313,44, 308,52, 299,59, 291,65, 290,67, 289,69, 286,71, 283,72, 280,72, 277,73, 274,73, 274,70, 273,67, 273,66, 272,66, 271,67, 270,69, 270,68, 269,67, 268,67, 268,65, 269,65, 268,64, 267,63, 267,59, 268,56, 247,56, 246,54, 244,52, 244,37, 245,36, 245,31, 246,26, 245,23, 244,21, 244,17, 246,16, 247,15, 247,11, 248,10, 250,10, 251,11, 253,12, 254,11, 256,11, 255,10, 255,9, 252,8, 249,7, 248,6, 247,5, 248,4, 248,2" href="county?CountyName=Jackson" shape="polygon"> <area alt="Lauderdale" coords="142,37, 141,37, 140,38, 139,38, 138,37, 135,34, 132,30, 129,30, 127,29, 125,31, 123,32, 118,30, 113,28, 111,28, 108,27, 100,31, 91,35, 88,37, 85,39, 82,39, 80,40, 77,38, 74,37, 71,33, 67,29, 66,26, 65,23, 64,21, 63,20, 59,18, 55,16, 51,17, 48,18, 47,18, 46,17, 44,15, 42,13, 39,8, 36,3, 36,2, 48,1, 60,1, 81,2, 147,2, 147,15, 146,28, 145,30, 143,32, 142,32, 141,33, 141,35, 142,37" href="county?CountyName=Lauderdale" shape="polygon"> <area alt="Geneva" coords="272,527, 274,527, 279,526, 295,526, 303,525, 329,525, 333,524, 355,524, 355,552, 345,552, 335,553, 323,553, 311,554, 294,554, 291,555, 273,555, 273,541, 272,535, 272,527" href="county?CountyName=Geneva" shape="polygon"> <area alt="Baldwin" coords="62,534, 66,532, 66,529, 69,530, 74,526, 76,527, 77,527, 75,524, 76,523, 78,524, 78,521, 76,520, 79,519, 80,517, 82,518, 84,517, 83,515, 81,513, 82,511, 86,515, 87,513, 92,514, 96,517, 99,521, 104,522, 104,555, 106,556, 107,562, 103,573, 104,577, 113,586, 115,591, 123,597, 128,598, 130,602, 131,608, 127,617, 125,621, 128,627, 130,633, 122,644, 108,650, 107,655, 83,662, 59,662, 85,656, 88,653, 70,636, 69,609, 56,591, 56,584, 62,580, 64,580, 65,579, 64,576, 60,573, 60,571, 67,564, 63,560, 64,550, 65,549, 66,547, 64,546, 62,543, 65,540, 65,538, 66,536, 66,535, 62,534" href="county?CountyName=Baldwin" shape="polygon"> <area alt="Barbour" coords="323,467, 324,463, 326,459, 327,455, 327,450, 329,447, 331,445, 331,441, 330,437, 331,434, 331,431, 336,422, 340,414, 348,414, 348,411, 353,411, 353,410, 355,410, 355,411, 358,411, 358,394, 360,394, 360,392, 378,392, 379,394, 381,396, 381,397, 382,398, 384,400, 385,401, 386,402, 386,404, 390,403, 393,403, 393,402, 397,403, 401,403, 401,404, 400,406, 401,408, 401,413, 400,415, 397,421, 395,426, 394,429, 393,433, 393,438, 394,443, 392,443, 390,444, 388,446, 385,448, 385,450, 384,453, 361,453, 361,466, 342,466, 323,467" href="county?CountyName=Barbour" shape="polygon"> <area alt="Wilcox" coords="186,440, 169,440, 153,441, 151,440, 150,440, 134,441, 103,441, 103,435, 102,434, 97,434, 97,418, 98,417, 102,417, 102,408, 103,399, 114,399, 114,390, 115,381, 117,380, 125,380, 126,382, 127,384, 128,384, 130,385, 131,385, 132,386, 132,388, 133,390, 134,389, 135,389, 136,390, 138,390, 138,392, 139,392, 140,393, 140,394, 141,395, 142,395, 142,396, 143,397, 146,397, 146,399, 145,400, 147,400, 148,402, 149,403, 152,404, 154,405, 154,408, 155,408, 155,411, 170,410, 192,410, 191,416, 191,422, 188,422, 185,423, 185,431, 186,440" href="county?CountyName=Wilcox" shape="polygon"> <area alt="Montgomery" coords="292,408, 292,419, 270,420, 256,420, 256,409, 245,409, 244,382, 240,380, 239,380, 237,378, 235,378, 234,374, 235,371, 233,369, 233,368, 234,365, 237,364, 238,360, 241,361, 243,359, 245,359, 245,357, 248,357, 251,356, 253,357, 255,358, 253,354, 254,349, 255,349, 257,350, 260,348, 260,346, 269,353, 268,355, 270,356, 271,355, 273,356, 276,356, 276,357, 281,357, 284,359, 285,359, 286,357, 288,357, 291,367, 295,369, 296,373, 299,375, 299,377, 292,377, 292,380, 291,380, 292,408" href="county?CountyName=Montgomery" shape="polygon"> <area alt="Chilton" coords="172,319,172,302,180,301,187,301,187,268,202,267,217,267,217,269,219,269,221,271,223,273,228,273,228,276,229,278,229,286,230,288,232,290,232,292,233,294,235,295,236,296,236,297,237,297,236,300,236,302,237,304,239,306,241,306,241,307,242,308,244,309,246,311,244,311,241,312,242,315,242,318,207,318,207,321,208,325,196,325,184,324,178,325,172,325,172,319" href="county?CountyName=Chilton" shape="polygon"> <area alt="Tallapoosa" coords="337,313, 336,314, 335,314, 335,315, 334,316, 326,316, 326,318, 324,318, 325,325, 325,332, 323,332, 323,333, 318,333, 313,334, 313,346, 304,346, 304,342, 303,339, 303,336, 302,334, 302,325, 301,323, 300,322, 301,317, 302,312, 294,312, 294,310, 293,310, 292,311, 291,311, 291,312, 289,312, 288,288, 288,265, 291,265, 291,262, 310,261, 328,260, 332,261, 335,261, 336,287, 337,313" href="county?CountyName=Tallapoosa" shape="polygon"> <area alt="Greene" coords="91,278, 92,281, 89,283, 88,283, 88,285, 87,286, 88,286, 89,288, 87,290, 85,290, 85,293, 83,294, 80,294, 80,296, 78,298, 78,301, 79,307, 77,310, 74,312, 73,313, 76,314, 78,312, 79,312, 81,316, 79,316, 79,320, 82,319, 84,327, 87,327, 89,328, 87,330, 86,329, 81,330, 82,333, 87,333, 89,337, 86,339, 85,337, 84,337, 82,343, 80,346, 79,343, 76,343, 75,345, 73,343, 73,340, 72,336, 74,335, 75,337, 77,336, 75,333, 71,333, 65,331, 63,333, 57,336, 52,336, 49,331, 52,329, 52,326, 54,323, 52,322, 48,324, 45,322, 45,321, 49,319, 48,317, 46,316, 46,310, 49,311, 51,308, 46,307, 44,304, 41,304, 38,303, 40,300, 37,298, 36,292, 35,292, 36,289, 38,289, 38,286, 40,286, 39,282, 39,277, 42,275, 42,274, 49,274, 50,271, 54,273, 55,270, 63,268, 67,262, 77,259, 78,276, 91,276, 91,278" href="county?CountyName=Greene" shape="polygon"> <area alt="Jefferson" coords="166,245, 166,240, 164,240, 164,239, 159,238, 159,237, 155,237, 155,235, 153,234, 153,232, 151,232, 151,230, 149,230, 149,229, 147,228, 147,225, 145,224, 145,221, 141,220, 141,218, 138,218, 138,217, 135,217, 135,215, 134,215, 136,211, 141,212, 141,210, 144,210, 142,208, 143,206, 144,206, 144,207, 146,204, 150,204, 151,203, 149,199, 151,196, 152,196, 152,194, 156,195, 156,192, 162,192, 162,188, 166,189, 166,184, 168,184, 169,179, 170,177, 170,173, 172,172, 172,170, 175,171, 175,168, 177,169, 177,167, 179,167, 186,163, 199,163, 211,172, 211,173, 224,173, 224,177, 225,177, 225,179, 226,179, 226,188, 225,188, 225,191, 224,191, 224,202, 227,202, 227,206, 225,206, 224,207, 223,206, 223,208, 222,207, 222,209, 220,209, 220,210, 219,210, 219,213, 217,213, 217,214, 209,214, 210,216, 207,217, 206,218, 205,218, 204,220, 201,221, 201,224, 198,225, 199,227, 192,229, 192,232, 186,233, 185,235, 183,235, 183,237, 181,238, 181,241, 179,240, 179,242, 176,242, 176,243, 175,243, 175,245, 166,245" href="county?CountyName=Jefferson" shape="polygon"> <area alt="Cleburne" coords="362,185, 364,196, 367,208, 364,207, 362,205, 362,206, 361,207, 345,207, 328,208, 314,208, 314,209, 313,209, 312,210, 311,211, 311,212, 300,212, 300,211, 302,211, 303,209, 303,208, 307,204, 310,201, 310,199, 316,199, 316,193, 318,193, 318,192, 319,191, 322,191, 322,189, 326,189, 326,187, 328,187, 328,178, 327,169, 329,169, 329,168, 330,167, 331,167, 331,165, 333,165, 333,159, 328,159, 328,155, 331,155, 331,154, 335,153, 339,153, 340,149, 340,146, 343,146, 344,145, 344,144, 349,144, 354,143, 355,147, 356,151, 359,168, 362,185" href="county?CountyName=Cleburne" shape="polygon"> <area alt="Winston" coords="159,142, 154,142, 153,141, 151,141, 148,141, 148,142, 146,141, 99,141, 99,120, 100,112, 100,99, 103,99, 105,98, 118,98, 126,99, 159,99, 159,142" href="county?CountyName=Winston" shape="polygon"> <area alt="Marshall" coords="277,73, 274,76, 271,80, 271,82, 269,82, 270,83, 270,84, 272,84, 273,98, 273,112, 268,113, 263,114, 257,120, 251,125, 242,114, 234,103, 233,102, 233,100, 230,100, 230,98, 219,98, 219,85, 220,75, 222,64, 223,68, 223,71, 225,73, 228,74, 229,74, 231,75, 234,74, 237,73, 239,71, 241,70, 241,68, 242,68, 243,69, 243,68, 244,68, 245,69, 246,69, 248,67, 249,66, 249,64, 250,62, 249,61, 248,61, 249,60, 250,58, 248,58, 248,57, 247,56, 268,56, 267,59, 267,63, 268,64, 269,65, 268,65, 268,67, 269,67, 270,68, 270,69, 271,67, 272,66, 273,66, 273,67, 274,70, 274,73, 277,73" href="county?CountyName=Marshall" shape="polygon"> <area alt="Escambia" coords="158,555, 150,555, 132,556, 105,556, 104,555, 104,522, 105,522, 108,523, 110,523, 111,524, 112,523, 115,522, 117,521, 118,521, 118,520, 119,520, 119,519, 138,519, 165,518, 204,518, 204,519, 203,519, 203,526, 204,527, 207,527, 207,528, 208,528, 209,529, 209,528, 210,528, 211,527, 212,527, 212,555, 207,555, 204,556, 196,556, 180,555, 158,555" href="county?CountyName=Escambia" shape="polygon"> <area alt="Dale" coords="318,525, 318,485, 317,476, 317,467, 329,467, 335,466, 361,466, 361,472, 362,478, 362,511, 354,511, 354,516, 348,516, 347,515, 345,515, 343,514, 334,514, 334,515, 333,516, 332,517, 331,519, 330,521, 329,523, 329,524, 328,525, 318,525" href="county?CountyName=Dale" shape="polygon"> <area alt="Washington" coords="62,534, 61,533, 60,533, 58,534, 57,535, 20,535, 20,539, 14,540, 8,540, 7,518, 6,496, 5,478, 4,459, 26,460, 48,460, 49,462, 50,464, 49,465, 48,466, 49,470, 50,473, 54,475, 57,476, 56,477, 55,477, 55,478, 59,480, 63,482, 65,483, 67,483, 69,485, 70,488, 70,491, 69,493, 68,494, 67,495, 68,496, 69,496, 69,498, 68,499, 69,499, 70,500, 71,503, 72,506, 71,508, 70,511, 69,510, 68,509, 68,513, 64,513, 65,514, 66,515, 65,516, 64,517, 64,518, 62,518, 61,519, 60,520, 63,521, 66,521, 67,523, 67,525, 66,527, 66,532, 64,533, 62,534" href="county?CountyName=Washington" shape="polygon"> <area alt="Butler" coords="239,421, 239,437, 240,437, 240,440, 239,440, 240,444, 240,463, 234,463, 234,482, 194,482, 193,480, 192,479, 191,479, 191,478, 190,476, 189,474, 189,473, 188,473, 188,472, 187,472, 187,468, 186,461, 186,440, 185,437, 185,423, 186,422, 199,422, 215,421, 239,421" href="county?CountyName=Butler" shape="polygon"> <area alt="Russell" coords="357,381, 357,369, 356,357, 362,356, 368,356, 368,348, 383,347, 399,346, 399,341, 406,341, 407,345, 407,350, 409,352, 410,353, 410,358, 409,358, 408,359, 409,360, 410,361, 408,363, 406,364, 406,367, 411,369, 416,372, 417,373, 419,375, 419,377, 418,378, 416,378, 416,379, 417,381, 416,382, 415,382, 413,383, 410,383, 411,384, 412,386, 409,387, 406,388, 405,389, 404,390, 403,392, 401,395, 402,398, 402,402, 401,403, 397,403, 393,402, 393,403, 390,403, 386,404, 386,402, 385,401, 384,400, 382,398, 381,397, 381,396, 379,394, 378,392, 360,392, 360,391, 358,392, 357,392, 357,381" href="county?CountyName=Russell" shape="polygon"> <area alt="Marengo" coords="97,418, 50,419, 48,416, 48,419, 47,418, 45,416, 45,411, 49,408, 51,408, 54,406, 53,403, 54,399, 58,396, 58,383, 57,381, 57,379, 58,379, 59,377, 62,375, 66,375, 65,378, 66,379, 67,376, 66,375, 65,372, 62,370, 60,370, 54,366, 55,359, 59,356, 59,355, 64,353, 66,350, 71,346, 76,347, 75,345, 76,343, 79,343, 80,346, 90,346, 90,351, 114,351, 114,375, 121,375, 120,380, 115,381, 114,399, 103,399, 102,417, 98,417, 97,418" href="county?CountyName=Marengo" shape="polygon"> <area alt="Elmore" coords="304,346, 305,348, 304,352, 299,352, 297,353, 293,352, 292,354, 291,352, 290,356, 288,357, 286,357, 285,359, 284,359, 281,357, 276,357, 276,356, 273,356, 271,355, 270,356, 268,355, 269,353, 260,346, 260,348, 257,350, 255,349, 254,349, 253,354, 255,358, 253,357, 251,356, 248,357, 245,357, 245,359, 243,359, 242,319, 241,313, 246,312, 251,312, 251,310, 253,310, 253,312, 291,312, 292,311, 294,310, 294,312, 302,312, 300,322, 302,325, 302,334, 303,339, 304,346" href="county?CountyName=Elmore" shape="polygon"> <area alt="Bibb" coords="125,279, 131,278, 137,278, 137,267, 139,264, 141,261, 152,261, 152,252, 154,251, 155,249, 155,246, 160,246, 160,248, 162,248, 164,246, 166,245, 171,245, 171,255, 173,256, 175,256, 175,257, 177,257, 177,265, 179,265, 179,267, 181,267, 181,269, 182,269, 183,270, 184,271, 185,271, 185,272, 186,272, 187,271, 187,302, 180,302, 172,303, 138,303, 138,298, 132,297, 125,297, 125,279" href="county?CountyName=Bibb" shape="polygon"> <area alt="Clay" coords="288,265, 288,263, 268,263, 268,250, 274,250, 274,236, 290,236, 290,230, 289,224, 294,224, 294,222, 296,222, 296,214, 297,214, 297,211, 298,208, 303,208, 303,209, 302,211, 300,211, 300,212, 311,212, 311,211, 312,210, 313,209, 314,209, 314,208, 328,208, 328,260, 310,261, 291,262, 291,265, 288,265" href="county?CountyName=Clay" shape="polygon"> <area alt="Pickens" coords="77,259, 75,259, 72,260, 68,262, 67,262, 66,263, 65,265, 63,267, 63,268, 61,268, 59,269, 56,270, 55,270, 54,271, 54,273, 53,273, 52,272, 51,272, 50,271, 50,273, 49,273, 49,274, 42,274, 42,275, 41,276, 40,276, 40,277, 39,277, 39,282, 20,282, 20,275, 21,261, 23,247, 23,240, 24,235, 25,223, 26,211, 27,206, 46,206, 59,207, 77,207, 77,259" href="county?CountyName=Pickens" shape="polygon"> <area alt="St. Clair" coords="227,203, 227,202, 224,202, 224,191, 225,191, 225,188, 226,188, 226,179, 225,179, 225,177, 224,177, 224,173, 220,173, 220,169, 225,168, 228,166, 238,165, 246,157, 246,153, 247,152, 249,151, 249,148, 254,142, 255,142, 255,145, 257,145, 260,142, 263,142, 266,146, 267,151, 269,151, 270,154, 273,154, 275,158, 279,158, 280,160, 280,163, 279,166, 281,171, 277,175, 275,176, 273,179, 270,178, 270,184, 268,184, 266,182, 263,183, 267,186, 268,189, 267,191, 264,193, 265,196, 262,198, 263,199, 265,202, 265,203, 260,206, 259,209, 257,210, 256,207, 255,208, 248,220, 244,223, 244,208, 231,208, 232,203, 227,203" href="county?CountyName=St. Clair" shape="polygon"> <area alt="Walker" coords="125,196, 125,185, 112,184, 112,160, 99,160, 100,154, 99,141, 148,142, 151,140, 153,141, 154,142, 159,142, 160,150, 162,153, 162,156, 172,157, 173,159, 176,160, 176,163, 177,163, 177,169, 175,168, 175,171, 172,170, 172,172, 170,173, 170,177, 169,179, 168,184, 166,184, 166,189, 162,188, 162,192, 156,192, 156,195, 152,194, 152,196, 151,196, 149,199, 151,203, 150,204, 146,204, 144,207, 144,206, 143,206, 142,208, 136,208, 136,198, 131,198, 130,196, 125,196" href="county?CountyName=Walker" shape="polygon"> <area alt="Morgan" coords="222,64, 222,67, 220,75, 219,82, 219,98, 159,98, 159,72, 160,55, 160,47, 162,48, 164,50, 165,50, 167,51, 169,51, 170,52, 174,55, 177,58, 179,59, 181,60, 184,61, 188,63, 191,63, 192,64, 198,64, 199,63, 201,62, 203,60, 205,60, 205,59, 206,59, 206,60, 207,60, 208,61, 209,62, 209,64, 210,64, 211,65, 212,64, 212,63, 213,61, 214,60, 215,60, 215,59, 216,59, 217,60, 218,60, 220,61, 221,62, 221,63, 222,64" href="county?CountyName=Morgan" shape="polygon"> <area alt="Colbert" coords="123,32, 123,34, 124,35, 124,36, 123,38, 122,40, 122,42, 123,43, 122,44, 121,45, 120,46, 120,49, 121,50, 121,51, 117,51, 117,53, 116,54, 116,55, 115,56, 114,58, 114,61, 113,62, 112,63, 101,63, 77,62, 43,62, 43,55, 45,40, 47,25, 48,18, 49,18, 51,17, 54,17, 55,16, 56,17, 59,18, 61,19, 63,20, 64,21, 64,22, 65,23, 65,24, 66,26, 67,28, 67,29, 68,30, 71,33, 73,35, 74,37, 75,37, 77,38, 79,39, 80,40, 81,40, 82,39, 86,39, 88,37, 90,35, 91,35, 94,34, 100,31, 106,29, 108,27, 109,28, 114,28, 118,30, 121,31, 123,32" href="county?CountyName=Colbert" shape="polygon"> <area alt="Cherokee" coords="351,126, 353,134, 354,143, 349,144, 344,144, 344,145, 343,146, 340,146, 340,145, 328,145, 328,143, 316,143, 316,138, 312,131, 309,124, 309,122, 308,120, 308,119, 307,119, 306,120, 305,121, 304,121, 303,122, 303,116, 302,110, 303,107, 303,105, 306,105, 306,102, 310,102, 316,96, 322,90, 322,89, 323,87, 326,87, 326,86, 327,85, 329,82, 331,78, 331,74, 332,73, 333,72, 334,70, 334,68, 336,68, 337,69, 337,67, 338,66, 339,66, 342,82, 346,98, 348,112, 351,126" href="county?CountyName=Cherokee" shape="polygon"> <area alt="Houston" coords="413,550, 404,550, 384,551, 364,552, 355,552, 355,524, 333,524, 328,525, 329,523, 331,519, 333,516, 334,514, 342,514, 345,515, 347,515, 349,516, 354,516, 354,511, 362,511, 362,506, 368,506, 382,505, 402,505, 402,509, 401,510, 400,511, 400,513, 399,513, 399,514, 400,516, 400,518, 401,519, 401,520, 400,521, 400,525, 401,527, 402,528, 404,528, 404,529, 406,531, 407,532, 408,533, 408,534, 409,536, 410,538, 410,539, 411,541, 411,545, 412,549, 413,550" href="county?CountyName=Houston" shape="polygon"> <area alt="Covington" coords="272,527, 272,531, 273,541, 273,555, 253,555, 249,556, 244,556, 231,555, 212,555, 212,517, 211,510, 211,507, 212,506, 213,505, 215,504, 215,502, 216,501, 216,500, 215,499, 215,497, 214,495, 214,494, 211,494, 211,482, 244,482, 246,481, 246,491, 247,491, 249,489, 251,487, 252,486, 254,486, 255,485, 256,483, 258,481, 258,480, 260,480, 260,482, 261,485, 261,490, 263,490, 263,492, 271,492, 271,509, 272,521, 272,527" href="county?CountyName=Covington" shape="polygon"> <area alt="Clarke" coords="87,513, 86,515, 82,511, 81,513, 83,515, 84,517, 82,518, 80,517, 79,519, 76,520, 78,521, 78,524, 76,523, 75,524, 77,527, 76,527, 74,526, 69,530, 66,529, 67,525, 66,521, 60,520, 62,518, 64,518, 64,517, 66,515, 64,513, 68,513, 68,509, 70,511, 72,506, 70,500, 68,499, 69,496, 67,495, 69,493, 70,488, 67,483, 63,482, 55,478, 55,477, 57,476, 50,473, 48,466, 50,464, 48,460, 47,452, 46,451, 42,451, 41,450, 38,443, 41,438, 43,436, 44,431, 53,429, 51,427, 48,428, 47,426, 45,425, 48,423, 51,423, 51,420, 50,419, 97,418, 97,434, 102,434, 103,435, 103,441, 117,441, 117,443, 115,443, 116,458, 110,459, 109,463, 110,465, 110,479, 105,483, 104,484, 110,489, 110,495, 108,496, 106,499, 105,499, 101,496, 100,496, 95,499, 94,502, 92,503, 93,507, 92,508, 90,509, 87,505, 87,508, 84,509, 85,512, 87,513" href="county?CountyName=Clarke" shape="polygon"> <area alt="Pike" coords="270,420, 281,419, 292,419, 292,408, 294,408, 294,409, 296,409, 296,406, 299,406, 302,407, 302,408, 303,408, 304,412, 304,415, 305,416, 306,416, 306,419, 316,419, 316,431, 331,431, 331,434, 330,437, 331,441, 331,445, 329,447, 327,450, 327,455, 326,459, 324,463, 323,467, 284,467, 276,468, 272,468, 274,465, 276,461, 276,444, 273,445, 270,445, 269,443, 269,441, 270,440, 271,438, 271,436, 270,434, 271,431, 271,424, 270,420" href="county?CountyName=Pike" shape="polygon"> <area alt="Autauga" coords="196,369, 196,366, 194,364, 192,361, 193,359, 194,358, 192,356, 190,355, 190,354, 189,352, 188,351, 188,348, 187,346, 185,343, 185,331, 184,325, 196,326, 208,326, 207,322, 207,319, 242,319, 243,339, 243,359, 242,360, 241,361, 239,360, 238,360, 237,362, 237,364, 235,364, 234,365, 233,367, 233,368, 231,369, 228,369, 228,366, 226,365, 225,364, 224,365, 223,366, 221,366, 219,365, 219,361, 217,360, 215,360, 215,362, 214,364, 212,366, 210,367, 207,367, 206,364, 206,361, 205,362, 203,363, 202,362, 200,362, 199,364, 199,366, 200,367, 201,368, 200,370, 200,371, 199,372, 198,373, 196,373, 196,369" href="county?CountyName=Autauga" shape="polygon"> <area alt="Lee" coords="396,330, 396,331, 397,333, 402,337, 406,341, 399,341, 399,346, 383,347, 368,348, 368,356, 362,356, 356,357, 356,350, 355,344, 352,344, 349,345, 338,339, 328,334, 325,334, 325,325, 324,318, 326,318, 326,316, 334,316, 335,315, 335,314, 336,314, 337,313, 343,313, 349,312, 352,313, 355,313, 355,311, 357,311, 358,312, 358,313, 366,312, 373,312, 373,311, 382,310, 390,310, 391,311, 392,312, 392,318, 393,319, 394,320, 394,322, 393,324, 394,325, 395,326, 395,328, 396,330" href="county?CountyName=Lee" shape="polygon"> <area alt="Hale" coords="125,297, 125,303, 120,303, 119,327, 114,327, 114,351, 90,351, 90,346, 80,346, 82,343, 84,337, 85,337, 86,339, 89,337, 87,333, 82,333, 81,330, 86,329, 87,330, 89,328, 87,327, 84,327, 82,319, 79,320, 79,316, 81,316, 79,312, 78,312, 76,314, 73,313, 74,312, 77,310, 79,307, 78,301, 78,298, 80,296, 80,294, 83,294, 85,293, 85,290, 87,290, 89,288, 88,286, 87,286, 88,285, 88,283, 89,283, 92,281, 91,278, 125,279, 125,297" href="county?CountyName=Hale" shape="polygon"> <area alt="Shelby" coords="171,245, 175,245, 175,243, 176,243, 176,242, 179,242, 179,240, 181,241, 181,238, 183,237, 183,235, 185,235, 186,233, 192,232, 192,229, 199,227, 198,225, 201,224, 201,221, 204,220, 205,218, 206,218, 207,217, 210,216, 209,214, 217,214, 217,213, 219,213, 219,210, 220,210, 220,209, 222,209, 222,207, 223,208, 223,206, 224,207, 225,206, 227,206, 227,203, 232,203, 231,208, 244,208, 244,223, 247,227, 248,229, 246,230, 245,233, 246,236, 243,239, 238,239, 239,243, 238,244, 235,244, 234,246, 235,250, 233,250, 231,252, 232,257, 235,259, 235,261, 233,261, 232,263, 230,265, 228,274, 223,274, 219,270, 217,270, 217,268, 187,269, 187,271, 185,272, 184,271, 183,270, 181,269, 181,267, 179,267, 179,265, 177,265, 177,257, 175,257, 175,256, 171,255, 171,245" href="county?CountyName=Shelby" shape="polygon"> <area alt="Fayette" coords="77,207, 65,207, 65,198, 64,180, 64,152, 70,153, 82,153, 94,154, 100,154, 99,155, 99,160, 112,160, 112,184, 118,184, 123,185, 125,185, 125,196, 121,196, 112,195, 100,195, 100,199, 96,199, 96,207, 77,207" href="county?CountyName=Fayette" shape="polygon"> <area alt="Franklin" coords="111,98, 105,98, 104,99, 94,99, 90,98, 53,98, 49,97, 39,97, 39,96, 40,95, 40,85, 41,84, 41,74, 42,72, 42,64, 43,63, 43,62, 83,62, 90,63, 111,63, 111,98" href="county?CountyName=Franklin" shape="polygon"> <area alt="Dekalb" coords="339,66, 338,66, 337,67, 337,69, 336,68, 334,68, 334,70, 333,72, 332,73, 331,74, 331,78, 329,82, 327,85, 326,86, 326,87, 323,87, 322,89, 322,90, 316,96, 310,102, 306,102, 306,105, 303,105, 303,107, 302,110, 288,111, 273,111, 273,98, 272,84, 270,84, 270,83, 269,82, 271,82, 271,80, 274,76, 277,73, 280,72, 283,72, 286,71, 289,69, 290,67, 291,65, 299,59, 308,52, 313,44, 317,36, 319,35, 321,35, 322,33, 323,31, 324,28, 325,24, 326,22, 327,21, 328,20, 330,19, 333,35, 336,52, 336,54, 337,57, 338,61, 339,66" href="county?CountyName=Dekalb" shape="polygon"> <area alt="Limestone" coords="142,37, 142,36, 141,35, 141,33, 142,32, 143,32, 144,31, 145,30, 146,28, 146,24, 147,15, 147,2, 168,2, 182,3, 195,3, 195,64, 192,64, 191,63, 188,63, 184,61, 181,60, 179,59, 177,58, 174,55, 170,52, 169,51, 167,51, 165,50, 164,50, 162,48, 160,47, 159,46, 157,44, 156,42, 155,41, 154,40, 151,38, 149,36, 147,36, 146,35, 143,35, 143,36, 142,36, 142,37" href="county?CountyName=Limestone" shape="polygon"> <area alt="Henry" coords="362,506, 362,486, 361,472, 361,453, 384,453, 384,452, 385,450, 385,448, 386,447, 388,446, 389,444, 391,444, 392,443, 394,443, 394,444, 395,447, 396,449, 396,456, 397,456, 398,458, 400,461, 402,464, 403,465, 403,466, 404,470, 405,473, 405,480, 404,482, 403,484, 403,491, 402,495, 401,498, 401,504, 402,505, 382,505, 368,506, 362,506" href="county?CountyName=Henry" shape="polygon"> <area alt="Monroe" coords="126,519, 119,519, 118,521, 111,524, 104,522, 99,521, 96,517, 92,514, 87,513, 85,512, 84,509, 87,508, 87,505, 90,509, 92,508, 93,507, 92,503, 94,502, 95,499, 100,496, 101,496, 105,499, 106,499, 108,496, 110,495, 110,489, 104,484, 105,483, 110,479, 110,465, 109,463, 110,459, 116,458, 115,443, 117,443, 117,441, 150,440, 153,441, 186,440, 186,451, 174,457, 170,457, 169,459, 170,462, 166,465, 161,466, 160,473, 157,479, 156,484, 153,492, 150,493, 145,498, 142,500, 136,507, 133,512, 130,514, 126,519" href="county?CountyName=Monroe" shape="polygon"> <area alt="Crenshaw" coords="239,421, 242,420, 245,420, 245,409, 256,409, 256,420, 270,420, 271,424, 271,431, 270,434, 271,436, 271,438, 270,440, 269,441, 269,443, 270,445, 273,445, 276,444, 276,461, 274,465, 272,468, 276,468, 276,473, 277,479, 276,478, 275,478, 275,480, 270,480, 271,486, 271,492, 263,492, 263,490, 261,490, 261,485, 260,480, 258,480, 256,483, 254,486, 252,486, 249,489, 246,491, 246,481, 240,482, 234,482, 234,463, 240,463, 240,451, 239,440, 240,440, 240,437, 239,437, 239,421" href="county?CountyName=Crenshaw" shape="polygon"> <area alt="Choctaw" coords="4,459, 4,447, 3,434, 5,410, 8,387, 8,381, 9,376, 38,375, 67,375, 67,377, 66,379, 66,378, 65,378, 66,377, 66,375, 62,375, 60,376, 59,377, 59,378, 58,379, 57,379, 57,382, 58,383, 58,396, 56,397, 54,399, 53,401, 53,404, 54,406, 52,407, 51,408, 49,408, 47,409, 45,411, 45,416, 46,417, 47,418, 47,419, 48,419, 48,416, 49,418, 50,419, 51,420, 51,423, 48,423, 46,424, 45,425, 46,426, 47,426, 48,427, 48,428, 50,427, 51,427, 52,428, 53,429, 48,430, 44,431, 43,433, 43,436, 42,437, 41,438, 39,440, 38,443, 39,446, 41,450, 41,451, 46,451, 47,452, 48,456, 48,460, 26,460, 4,459" href="county?CountyName=Choctaw" shape="polygon"> <area alt="Macon" coords="299,377, 299,375, 298,374, 296,373, 296,371, 295,369, 293,368, 291,367, 290,362, 288,357, 289,357, 290,356, 291,354, 291,352, 292,353, 292,354, 293,353, 293,352, 295,353, 298,353, 299,352, 304,352, 305,350, 305,347, 304,346, 313,346, 313,334, 318,333, 323,333, 323,332, 325,332, 325,334, 328,334, 338,339, 349,345, 352,344, 355,344, 356,350, 356,357, 357,369, 357,381, 332,382, 308,382, 307,381, 305,380, 306,377, 306,375, 304,374, 302,373, 302,377, 299,377" href="county?CountyName=Macon" shape="polygon"> <area alt="Dallas" coords="120,380, 121,375, 126,375, 125,351, 161,350, 165,342, 165,338, 170,335, 169,331, 170,323, 172,320, 172,326, 184,325, 185,337, 185,343, 188,348, 188,351, 190,354, 190,355, 194,358, 192,361, 196,366, 196,369, 193,370, 192,372, 194,374, 190,380, 194,384, 197,384, 197,386, 185,386, 185,410, 155,411, 155,409, 154,408, 154,405, 149,403, 147,400, 145,400, 146,397, 143,397, 142,395, 140,394, 140,393, 138,392, 138,390, 135,389, 133,390, 132,386, 130,385, 127,384, 125,380, 120,380" href="county?CountyName=Dallas" shape="polygon"> <area alt="Coosa" coords="228,274, 229,273, 229,270, 230,267, 230,265, 231,264, 232,264, 232,263, 288,263, 288,304, 289,312, 253,312, 253,310, 251,310, 251,312, 245,312, 244,310, 242,309, 242,308, 241,308, 241,307, 239,307, 238,306, 237,305, 236,304, 236,301, 237,299, 237,298, 236,298, 236,297, 235,296, 233,295, 233,294, 232,293, 232,291, 231,291, 230,289, 229,288, 229,279, 228,278, 228,274" href="county?CountyName=Coosa" shape="polygon"> <area alt="Randolph" coords="328,208, 333,208, 339,207, 361,207, 361,206, 362,206, 363,206, 364,207, 366,207, 366,208, 367,208, 367,212, 368,214, 368,218, 369,223, 371,230, 372,237, 374,244, 375,251, 376,256, 376,259, 363,259, 356,260, 341,260, 337,261, 330,261, 329,260, 328,260, 328,208" href="county?CountyName=Randolph" shape="polygon"> <area alt="Tuscaloosa" coords="77,259, 77,207, 96,207, 96,199, 100,199, 100,195, 125,196, 130,196, 131,198, 136,198, 136,208, 142,208, 144,210, 141,210, 141,212, 136,211, 134,215, 135,215, 135,217, 138,217, 138,218, 141,218, 141,220, 145,221, 145,224, 147,225, 147,228, 149,229, 149,230, 151,230, 151,232, 153,232, 153,234, 155,235, 155,237, 159,237, 159,238, 164,239, 164,240, 166,240, 166,245, 162,248, 160,248, 160,246, 155,246, 155,249, 152,252, 152,261, 141,261, 137,267, 137,278, 125,279, 91,278, 91,276, 78,276, 77,259" href="county?CountyName=Tuscaloosa" shape="polygon"> <area alt="Calhoun" coords="310,199, 310,195, 287,195, 287,194, 285,194, 285,192, 284,190, 283,188, 281,186, 281,184, 270,184, 270,178, 273,179, 275,176, 277,175, 281,171, 279,166, 280,163, 280,160, 284,159, 284,158, 287,158, 287,155, 288,155, 288,153, 289,153, 289,151, 291,151, 291,150, 294,150, 294,152, 297,152, 298,147, 299,147, 299,145, 303,145, 303,144, 306,145, 316,146, 316,143, 328,143, 328,145, 340,145, 340,146, 339,153, 331,154, 331,155, 328,155, 328,159, 333,159, 333,165, 331,165, 331,167, 330,167, 329,169, 327,169, 328,187, 326,187, 326,189, 322,189, 322,191, 319,191, 318,193, 316,193, 316,199, 310,199" href="county?CountyName=Calhoun" shape="polygon"> <area alt="Blount" coords="176,160, 180,159, 181,157, 180,155, 182,153, 185,152, 186,150, 189,150, 190,148, 192,149, 192,147, 197,146, 199,142, 202,141, 204,135, 206,135, 206,132, 208,132, 206,128, 207,127, 208,129, 212,127, 212,124, 213,125, 214,123, 216,124, 217,123, 218,119, 223,114, 222,112, 226,108, 225,106, 227,104, 234,103, 251,125, 248,133, 247,144, 244,150, 247,152, 246,153, 246,157, 238,165, 228,166, 225,168, 220,169, 220,173, 211,173, 211,172, 199,163, 186,163, 179,167, 177,167, 177,163, 176,163, 176,160" href="county?CountyName=Blount" shape="polygon"> <area alt="Marion" coords="64,152, 64,138, 60,138, 60,134, 35,134, 35,132, 36,132, 36,125, 37,119, 38,113, 38,107, 39,102, 39,97, 49,97, 58,98, 90,98, 97,99, 100,99, 100,112, 99,120, 99,153, 100,154, 94,154, 88,153, 66,153, 64,152" href="county?CountyName=Marion" shape="polygon"> <area alt="Lawrence" coords="111,98, 111,63, 112,63, 113,62, 114,61, 114,58, 115,56, 116,55, 116,54, 117,53, 117,51, 121,51, 121,50, 120,49, 120,46, 121,45, 122,44, 123,43, 122,42, 122,40, 123,38, 124,36, 124,35, 123,34, 123,32, 125,31, 126,30, 127,29, 128,29, 129,30, 132,30, 133,31, 135,34, 137,36, 138,37, 139,38, 141,38, 141,37, 142,37, 142,36, 143,36, 143,35, 146,35, 147,36, 149,36, 151,38, 154,40, 155,41, 156,42, 157,44, 159,46, 160,47, 160,55, 159,72, 159,99, 135,99, 118,98, 111,98" href="county?CountyName=Lawrence" shape="polygon"> <area alt="Madison" coords="195,64, 195,3, 221,3, 247,2, 248,2, 248,4, 247,5, 248,6, 249,7, 252,8, 255,9, 255,10, 256,11, 254,11, 253,12, 251,11, 250,10, 248,10, 247,11, 247,15, 246,16, 244,17, 244,21, 245,23, 246,26, 245,31, 245,36, 244,37, 244,52, 246,54, 247,56, 248,57, 248,58, 250,58, 249,60, 248,61, 249,61, 250,62, 249,64, 249,66, 248,67, 246,69, 245,69, 244,68, 243,68, 243,69, 242,68, 241,68, 241,70, 239,71, 237,73, 234,74, 231,75, 229,74, 228,74, 225,73, 223,71, 223,68, 222,64, 221,63, 220,61, 218,60, 216,59, 215,60, 213,61, 212,63, 211,65, 210,64, 209,64, 209,62, 208,61, 207,60, 206,59, 205,60, 203,60, 201,62, 198,64, 195,64" href="county?CountyName=Madison" shape="polygon"></map>
<img alt="a map of Alabama" id="literary-map" src="<?php echo get_template_directory_uri(); ?>/images/county-map.png" usemap="#hex1">

<?php

get_footer();
?>