///uglifyjs .\cookie.js -c > cookie-min.js

man = {
    trapLeft: [125, 58, 116, 62, 108, 66, 100, 74, 113, 73, 120, 71, 124, 65],
    trapRight: [158, 58, 168, 62, 178, 68, 184, 74, 171, 73, 162, 71, 158, 64],
    sholderLeft: [111, 75, 97, 75, 90, 79, 86, 83, 82, 88, 80, 97, 81, 107, 86, 102, 92, 100, 96, 99, 101, 96, 106, 90, 109, 84, 111, 78],
    sholderRight: [170, 74, 173, 78, 174, 85, 180, 94, 186, 99, 194, 101, 199, 104, 202, 107, 203, 95, 200, 86, 195, 79, 187, 75],
    chestLeft: [141, 109, 141, 79, 137, 75, 129, 74, 123, 73, 116, 74, 112, 77, 110, 84, 106, 92, 99, 98, 96, 101, 100, 107, 107, 113, 114, 116, 122, 117, 132, 117, 138, 114],
    chestRight: [142, 111, 142, 79, 145, 76, 151, 73, 164, 73, 170, 75, 171, 80, 175, 88, 180, 96, 187, 100, 183, 107, 176, 113, 166, 117, 151, 117, 146, 115],
    bicepsLeft: [94, 101, 98, 106, 100, 111, 101, 118, 101, 126, 99, 133, 94, 143, 89, 144, 83, 140, 80, 138, 80, 129, 78, 120, 80, 111, 84, 105],
    bicepsRight: [188, 101, 195, 103, 200, 107, 204, 113, 205, 120, 203, 128, 203, 133, 203, 137, 198, 142, 195, 143, 189, 143, 186, 138, 183, 131, 182, 117, 183, 108],
    forearmLeft: [94, 144, 88, 144, 84, 141, 80, 138, 78, 146, 76, 155, 76, 164, 76, 173, 76, 181, 75, 190, 79, 193, 83, 194, 85, 194, 88, 185, 93, 170, 96, 160, 95, 149],
    forearmRight: [209, 190, 204, 193, 199, 194, 193, 180, 189, 164, 187, 154, 188, 143, 192, 144, 197, 144, 201, 140, 203, 138, 206, 147, 207, 157, 207, 169, 207, 181],
    obliqueLeft: [117, 185, 107, 177, 108, 160, 110, 150, 110, 143, 104, 132, 105, 124, 107, 115, 115, 118, 123, 118, 123, 127, 122, 158, 122, 166, 121, 175, 120, 183],
    obliqueRight: [176, 114, 169, 117, 160, 118, 160, 164, 161, 172, 163, 184, 166, 185, 175, 176, 174, 158, 172, 144, 177, 135, 179, 131, 179, 125],
    abdomenCoord: [141, 111, 138, 116, 131, 118, 124, 118, 124, 126, 126, 128, 123, 130, 123, 139, 126, 141, 123, 144, 123, 153, 127, 155, 124, 157, 125, 170, 129, 190, 132, 197, 135, 199, 148, 199, 152, 196, 154, 191, 159, 166, 159, 157, 156, 155, 160, 153, 160, 144, 156, 141, 160, 139, 160, 130, 156, 128, 159, 126, 159, 118, 149, 117, 144, 114],
    thighLeft: [133, 270, 138, 245, 138, 228, 134, 219, 129, 203, 124, 197, 120, 196, 110, 187, 106, 188, 103, 194, 101, 221, 101, 238, 105, 255, 109, 263, 111, 269, 115, 266, 116, 259, 117, 259, 119, 265, 123, 270, 129, 272],
    thighRight: [150, 271, 146, 249, 145, 228, 150, 215, 154, 203, 159, 197, 165, 194, 173, 187, 177, 188, 181, 193, 182, 217, 182, 240, 177, 257, 172, 268, 168, 267, 167, 259, 166, 259, 164, 265, 160, 270, 154, 271],
    calvesLeftIn: [135, 326, 137, 316, 137, 307, 133, 295, 132, 290, 129, 296, 129, 321, 132, 326],
    calvesRightIn: [148, 326, 146, 317, 146, 307, 149, 297, 151, 291, 154, 295, 154, 317, 153, 323, 151, 326],
    calvesLeftOut: [113, 328, 110, 315, 109, 303, 111, 291, 115, 296, 116, 314, 116, 324],
    calvesRightOut: [170, 328, 174, 311, 174, 302, 172, 290, 167, 297, 167, 324],
    trapback: [124, 59, 114, 64, 106, 69, 100, 75, 109, 75, 115, 77, 124, 76, 136, 75, 153, 75, 167, 77, 173, 76, 180, 75, 184, 75, 177, 68, 166, 62, 158, 59, 149, 62, 136, 62],
    shoulderLeftBack: [113, 77, 103, 76, 93, 77, 84, 85, 80, 96, 81, 108, 91, 105, 98, 101, 104, 93, 110, 83],
    shoulderRightBack: [170, 78, 180, 76, 190, 78, 197, 82, 202, 91, 203, 102, 202, 109, 193, 106, 184, 101, 177, 90],
    tricepsLeft: [97, 103, 92, 107, 82, 109, 79, 118, 80, 129, 81, 136, 88, 136, 92, 140, 94, 143, 99, 136, 101, 122, 100, 111],
    tricepsRight: [186, 103, 192, 106, 201, 109, 204, 115, 204, 125, 202, 136, 196, 135, 192, 139, 188, 144, 183, 132, 182, 120, 183, 109],
    trapMiddle: [117, 78, 135, 76, 150, 76, 166, 78, 162, 85, 157, 102, 152, 124, 145, 135, 138, 135, 132, 127, 124, 95, 120, 83],
    lowBackCoods: [162, 185, 159, 180, 159, 161, 155, 153, 151, 145, 149, 138, 149, 132, 145, 136, 140, 136, 136, 135, 134, 131, 133, 141, 129, 150, 124, 160, 124, 176, 123, 180, 121, 185, 129, 185, 137, 188, 142, 193, 147, 187, 153, 185],
    latsLeft: [104, 189, 118, 185, 123, 180, 122, 160, 127, 150, 132, 141, 133, 130, 127, 111, 121, 87, 116, 78, 114, 77, 107, 90, 98, 102, 100, 108, 102, 116, 102, 128, 105, 136, 110, 143, 110, 150, 108, 165, 108, 178, 106, 183],
    latsRight: [178, 188, 165, 185, 161, 180, 160, 158, 156, 150, 150, 139, 150, 130, 155, 116, 163, 85, 168, 78, 170, 78, 177, 92, 184, 102, 182, 108, 181, 119, 181, 128, 176, 138, 172, 144, 173, 153, 175, 162, 175, 172, 175, 179],
    forearmLeftBack: [94, 144, 91, 143, 89, 137, 81, 137, 78, 147, 76, 160, 77, 179, 75, 188, 80, 191, 86, 192, 90, 180, 95, 163, 96, 151],
    forearmRightBack: [202, 137, 195, 137, 191, 144, 189, 145, 187, 159, 191, 174, 197, 192, 203, 191, 208, 189, 206, 171, 207, 155],
    gluteoLeft: [141, 220, 141, 195, 135, 188, 121, 186, 112, 190, 107, 197, 106, 215, 111, 225, 116, 228, 128, 228, 136, 225],
    gluteoRight: [142, 221, 142, 194, 148, 189, 156, 186, 164, 186, 172, 190, 177, 200, 177, 215, 174, 223, 168, 228, 154, 228, 146, 225],
    hamsLeft: [111, 188, 104, 191, 102, 207, 101, 235, 104, 252, 111, 269, 114, 268, 117, 263, 120, 261, 124, 265, 126, 271, 129, 273, 133, 273, 137, 254, 137, 247, 134, 242, 134, 235, 129, 229, 116, 230, 108, 225, 105, 215, 105, 198, 107, 193],
    hamsRight: [171, 188, 178, 190, 180, 192, 182, 212, 182, 237, 179, 253, 172, 270, 169, 268, 165, 262, 161, 262, 158, 269, 156, 273, 150, 273, 145, 247, 147, 245, 149, 239, 150, 233, 154, 229, 169, 229, 176, 223, 178, 213, 177, 195, 174, 190],
    calvesLeft: [134, 333, 137, 320, 137, 311, 134, 300, 130, 299, 126, 302, 122, 301, 116, 293, 111, 293, 109, 306, 111, 320, 114, 333, 117, 336, 119, 338, 122, 337, 123, 329, 126, 328, 128, 330, 129, 335],
    calvesRight: [149, 333, 146, 317, 147, 305, 149, 299, 152, 299, 157, 302, 160, 302, 165, 297, 168, 293, 172, 293, 173, 304, 174, 310, 170, 328, 169, 333, 165, 338, 162, 338, 160, 330, 158, 328, 155, 330, 154, 334, 151, 335]
},
woman = {
    trapLeft: [128, 60, 128, 66, 126, 70, 121, 70, 116, 70, 114, 68, 121, 64],
    trapRight: [155, 61, 155, 66, 158, 70, 166, 70, 170, 69, 162, 64],
    sholderLeft: [121, 70, 116, 69, 109, 71, 104, 73, 99, 78, 96, 88, 95, 101, 106, 95, 113, 88, 117, 78],
    sholderRight: [162, 70, 170, 70, 178, 72, 184, 79, 187, 88, 188, 101, 181, 98, 173, 92, 168, 84],
    chestLeft: [121, 72, 138, 72, 141, 74, 141, 106, 139, 112, 130, 117, 120, 117, 111, 109, 111, 92, 114, 84, 116, 77],
    chestRight: [142, 74, 142, 107, 146, 113, 154, 117, 163, 117, 168, 113, 170, 109, 172, 105, 172, 91, 168, 83, 166, 75, 162, 72, 144, 72],
    bicepsLeft: [109, 94, 104, 98, 95, 101, 93, 110, 92, 122, 91, 124, 95, 134, 100, 134, 105, 124, 109, 110, 110, 103, 110, 95],
    bicepsRight: [174, 93, 179, 97, 188, 100, 191, 110, 191, 122, 192, 124, 188, 133, 183, 134, 176, 119, 172, 103],
    forearmLeft: [99, 135, 95, 135, 92, 131, 90, 126, 86, 138, 82, 158, 79, 180, 81, 184, 84, 185, 92, 163, 99, 144, 99, 139],
    forearmRight: [193, 126, 190, 133, 187, 135, 183, 135, 184, 146, 193, 168, 199, 185, 202, 184, 205, 179, 200, 151, 197, 134],
    obliqueLeft: [112, 112, 115, 128, 119, 141, 119, 143, 110, 164, 107, 171, 117, 181, 123, 185, 126, 184, 126, 168, 125, 159, 125, 157, 127, 156, 125, 153, 125, 142, 127, 140, 125, 138, 125, 129, 127, 128, 125, 127, 125, 119, 126, 118, 119, 118],
    obliqueRight: [170, 112, 165, 117, 157, 118, 158, 119, 158, 126, 156, 128, 158, 129, 158, 139, 156, 140, 158, 143, 158, 153, 156, 155, 158, 158, 157, 166, 157, 184, 161, 185, 170, 178, 175, 171, 168, 152, 164, 143, 164, 139, 168, 128, 170, 117, 171, 111],
    abdomenCoord: [141, 109, 139, 113, 132, 117, 128, 118, 126, 119, 126, 126, 130, 128, 126, 130, 126, 138, 129, 140, 126, 143, 126, 153, 129, 155, 126, 158, 132, 191, 134, 195, 138, 198, 145, 198, 149, 195, 157, 159, 157, 157, 153, 156, 157, 153, 157, 143, 154, 140, 157, 139, 157, 130, 154, 128, 157, 126, 157, 119, 155, 118, 149, 117, 144, 113],
    thighLeft: [105, 187, 106, 185, 107, 185, 112, 189, 121, 194, 128, 199, 139, 214, 139, 254, 137, 271, 136, 273, 132, 274, 128, 272, 125, 266, 123, 262, 122, 262, 121, 268, 119, 270, 116, 270, 114, 267, 109, 242, 105, 213],
    thighRight: [178, 187, 176, 185, 175, 185, 171, 188, 165, 192, 156, 198, 149, 206, 144, 214, 144, 260, 145, 269, 147, 273, 152, 273, 155, 271, 158, 267, 159, 262, 161, 262, 162, 266, 163, 269, 164, 270, 167, 269, 169, 264, 176, 227, 178, 200],
    calvesLeftIn: [136, 324, 133, 323, 131, 314, 130, 302, 132, 294, 134, 290, 136, 290, 137, 305, 137, 319],
    calvesRightIn: [147, 290, 146, 301, 146, 314, 147, 324, 150, 323, 153, 313, 153, 299, 150, 292],
    calvesLeftOut: [117, 323, 115, 311, 115, 296, 116, 290, 118, 291, 121, 297, 121, 316, 119, 322],
    calvesRightOut: [166, 323, 168, 310, 168, 296, 167, 289, 163, 294, 162, 303, 162, 315, 164, 322],
    trapback: [166, 68, 161, 70, 159, 70, 157, 69, 143, 68, 126, 69, 124, 70, 121, 69, 118, 67, 130, 60, 134, 61, 149, 61, 153, 60, 162, 65],
    shoulderLeftBack: [121, 70, 116, 69, 109, 71, 104, 73, 99, 78, 96, 88, 95, 101, 106, 95, 113, 88, 117, 78],
    shoulderRightBack: [162, 70, 170, 70, 178, 72, 184, 79, 187, 88, 188, 101, 181, 98, 173, 92, 168, 84],
    tricepsLeft: [109, 94, 110, 96, 110, 105, 108, 115, 105, 126, 101, 133, 100, 130, 95, 128, 92, 128, 91, 125, 92, 118, 93, 107, 95, 101, 98, 101, 104, 98],
    tricepsRight: [173, 94, 173, 104, 176, 118, 180, 130, 182, 132, 185, 129, 189, 129, 192, 126, 191, 122, 191, 112, 189, 104, 188, 101, 182, 100, 176, 96],
    trapMiddle: [158, 71, 148, 70, 134, 70, 125, 71, 129, 84, 132, 102, 135, 122, 137, 126, 139, 128, 144, 128, 146, 125, 148, 123, 152, 96],
    lowBackCoods: [148, 125, 144, 129, 137, 129, 135, 126, 134, 139, 130, 146, 125, 155, 122, 167, 129, 167, 136, 169, 141, 174, 141, 176, 145, 171, 150, 168, 161, 168, 159, 157, 155, 149, 149, 138],
    latsLeft: [124, 71, 122, 71, 119, 77, 114, 89, 110, 93, 111, 99, 111, 105, 114, 124, 118, 139, 119, 143, 116, 150, 111, 162, 108, 169, 118, 169, 120, 168, 123, 159, 127, 149, 133, 138, 134, 123, 131, 106, 126, 79],
    latsRight: [161, 71, 158, 71, 156, 85, 151, 111, 149, 124, 150, 136, 153, 143, 158, 153, 160, 158, 162, 168, 166, 169, 174, 169, 173, 164, 168, 154, 164, 144, 164, 139, 168, 130, 171, 112, 172, 106, 172, 97, 173, 93, 167, 85, 164, 76],
    forearmLeftBack: [90, 126, 86, 136, 81, 162, 78, 182, 81, 184, 84, 186, 89, 172, 97, 153, 99, 142, 100, 136, 101, 132, 97, 129, 92, 128],
    forearmRightBack: [193, 126, 190, 129, 185, 130, 182, 133, 184, 143, 187, 156, 195, 177, 199, 187, 205, 183, 201, 159, 197, 136],
    gluteoLeft: [141, 177, 141, 206, 137, 210, 133, 213, 129, 214, 118, 214, 112, 210, 109, 205, 110, 184, 112, 177, 116, 172, 120, 169, 130, 169, 134, 169, 138, 172],
    gluteoRight: [142, 206, 142, 176, 147, 171, 150, 169, 162, 169, 167, 172, 171, 178, 173, 184, 174, 202, 171, 211, 166, 214, 161, 215, 154, 215, 146, 211],
    hamsLeft: [116, 170, 108, 170, 105, 181, 105, 210, 111, 251, 115, 270, 118, 270, 121, 265, 123, 262, 125, 262, 127, 267, 130, 273, 131, 274, 135, 274, 138, 272, 139, 260, 139, 229, 136, 226, 135, 218, 134, 213, 129, 215, 118, 215, 112, 212, 108, 204, 109, 182, 112, 174],
    hamsRight: [167, 171, 175, 171, 178, 182, 178, 211, 173, 246, 168, 270, 165, 270, 162, 266, 160, 263, 157, 263, 155, 269, 152, 274, 148, 274, 145, 272, 144, 230, 147, 228, 148, 224, 148, 217, 149, 214, 155, 216, 163, 216, 170, 212, 174, 205, 174, 183, 171, 176],
    calvesLeft: [116, 292, 115, 298, 116, 318, 117, 327, 119, 330, 124, 330, 125, 328, 126, 324, 129, 324, 131, 328, 133, 328, 136, 325, 137, 319, 138, 308, 137, 297, 134, 295, 130, 298, 127, 298, 123, 293, 121, 292],
    calvesRight: [147, 296, 146, 299, 146, 318, 147, 324, 149, 329, 151, 329, 154, 324, 157, 324, 159, 328, 160, 330, 163, 330, 166, 328, 167, 317, 168, 300, 167, 292, 162, 292, 156, 299, 153, 299, 150, 296]
};

const img = document.querySelector(".body-front");
const imgBack = document.querySelector(".body-back");

function mapWoman() {
    this.twoParts(woman.trapRight, woman.trapLeft, [".FtrapRight", ".FtrapLeft"]),
    this.twoParts(woman.sholderRight, woman.sholderLeft, [".FshoulderRight", ".FshoulderLeft"]),
    this.twoParts(woman.chestRight, woman.chestLeft, [".FchestRight", ".FchestLeft"]),
    this.twoParts(woman.bicepsRight, woman.bicepsLeft, [".FbicepsRight", ".FbicepsLeft"]),
    this.twoParts(woman.forearmRight, woman.forearmLeft, [".FforearmRight", ".FforearmLeft"]),
    this.twoParts(woman.obliqueRight, woman.obliqueLeft, [".FobliqueRight", ".FobliqueLeft"]),
    this.onePart(woman.abdomenCoord, [".Fabdomen"]),
    this.twoParts(woman.thighRight, woman.thighLeft, [".FthighRight", ".FthighLeft"]),
    this.fourParts(woman.calvesRightOut, woman.calvesLeftOut, woman.calvesRightIn, woman.calvesLeftIn, [".FcalvesRightOut", ".FcalvesLeftOut", ".FcalvesRightIn", ".FcalvesLeftIn"]),
    
    this.showhide(".trap", ".FtrapImg"),
    this.showhide(".shoulder", ".FshoulderImg"),
    this.showhide(".chest", ".FchestImg"),
    this.showhide(".biceps", ".FbicepsImg"),
    this.showhide(".forearm", ".FforearmImg"),
    this.showhide(".oblique", ".FobliqueImg"),
    this.showhide(".Fabdomen", ".FabdomenImg"),
    this.showhide(".thigh", ".FthighImg"),
    this.showhide(".calves", ".FcalvesImg"),
   
    //back
    this.onePart(woman.trapback, ".FtrapBack"),
    this.twoParts(woman.shoulderRightBack, woman.shoulderLeftBack, [".FshoulderRightBack", ".FshoulderLeftBack"]),
    this.onePart(woman.trapMiddle, ".FtrapMid"),
    this.onePart(woman.lowBackCoods, ".FlowBack"),
    this.twoParts(woman.tricepsRight, woman.tricepsLeft, [".FtricepsRight", ".FtricepsLeft"]),
    this.twoParts(woman.forearmRight, woman.forearmLeft, [".FforearmLeftBack", ".FforearmRightBack"]),
    this.twoParts(woman.latsRight, woman.latsLeft, [".FlatsRight", ".FlatsLeft"]),
    this.twoParts(woman.gluteoRight, woman.gluteoLeft, [".FgluteoRight", ".FgluteoLeft"]),
    this.twoParts(woman.hamsRight, woman.hamsLeft, [".FhamsRight", ".FhamsLeft"]),
    this.twoParts(woman.calvesRight, woman.calvesLeft, [".FcalvesRightBack", ".FcalvesLeftBack"]),
    
    this.showhide(".FtrapBack", ".FtrapImgBack"),
    this.showhide(".shoulderBack", ".FshoulderImgBack"),
    this.showhide(".FtrapMid", ".FtrapMidImgBack"),
    this.showhide(".FlowBack", ".FlowBackImgBack"),
    this.showhide(".triceps", ".FtricepsImgBack"),
    this.showhide(".forearmBack", ".FforearmImgBack"),
    this.showhide(".lats", ".FlatsImgBack"),
    this.showhide(".gluteos", ".FgluteosImgBack"),
    this.showhide(".hams", ".FhamsImgBack"),
    this.showhide(".calvesBack", ".FcalvesImgBack")
}
function mapMan() {
    this.twoParts(man.trapRight, man.trapLeft, [".MtrapRight", ".MtrapLeft"]),
    this.twoParts(man.sholderRight, man.sholderLeft, [".shoulderRight", ".shoulderLeft"]),
    this.twoParts(man.chestRight, man.chestLeft, [".chestRight", ".chestLeft"]),
    this.twoParts(man.bicepsRight, man.bicepsLeft, [".bicepsRight", ".bicepsLeft"]),
    this.twoParts(man.forearmRight, man.forearmLeft, [".forearmRight", ".forearmLeft"]),
    this.twoParts(man.obliqueRight, man.obliqueLeft, [".obliqueRight", ".obliqueLeft"]),
    this.twoParts(man.thighRight, man.thighLeft, [".thighRight", ".thighLeft"]),
    this.onePart(man.abdomenCoord, [".abdomen"]),
    this.fourParts(man.calvesRightOut, man.calvesLeftOut, man.calvesRightIn, man.calvesLeftIn, [".calvesRightOut", ".calvesLeftOut", ".calvesRightIn", ".calvesLeftIn"]),
    
    this.showhide(".trap", ".trapImg"),
    this.showhide(".shoulder", ".shoulderImg"),
    this.showhide(".chest", ".chestImg"),
    this.showhide(".biceps", ".bicepsImg"),
    this.showhide(".forearm", ".forearmImg"),
    this.showhide(".oblique", ".obliqueImg"),
    this.showhide(".abdomen", ".abdomenImg"),
    this.showhide(".thigh", ".thighImg"),
    this.showhide(".calves", ".calvesImg"),
    

    //back
    this.onePart(man.trapback, ".trapBack"),
    this.onePart(man.trapMiddle, ".trapMid"),
    this.onePart(man.lowBackCoods, ".lowBack"),
    this.twoParts(man.shoulderRightBack, man.shoulderLeftBack, [".shoulderRightBack", ".shoulderLeftBack"]),
    this.twoParts(man.tricepsRight, man.tricepsLeft, [".tricepsRight", ".tricepsLeft"]),
    this.twoParts(man.latsRight, man.latsLeft, [".latsRight", ".latsLeft"]),
    this.twoParts(man.forearmLeftBack, man.forearmRightBack, [".forearmRightBack", ".forearmLeftBack"]),
    this.twoParts(man.gluteoRight, man.gluteoLeft, [".gluteoRight", ".gluteoLeft"]),
    this.twoParts(man.hamsRight, man.hamsLeft, [".hamsRight", ".hamsLeft"]),
    this.twoParts(man.calvesRight, man.calvesLeft, [".calvesRightBack", ".calvesLeftBack"]),
    
    this.showhide(".trapBack", ".trapImgBack"),
    this.showhide(".shoulderBack", ".shoulderImgBack"),
    this.showhide(".trapMid", ".trapMidImgBack"),
    this.showhide(".lowBack", ".lowBackImgBack"),
    this.showhide(".triceps", ".tricepsImgBack"),
    this.showhide(".forearmBack", ".forearmImgBack"),
    this.showhide(".lats", ".latsImgBack"),
    this.showhide(".gluteos", ".gluteosImgBack"),
    this.showhide(".hams", ".hamsImgBack"),
    this.showhide(".calvesBack", ".calvesImgBack")
}

function twoParts(partRight, partLeft, className) {
    var coordsRight = this.coordsResize(partRight,img);
    var areaRight = document.querySelector(className[0]);
    areaRight.coords = coordsRight;

    var coordsLeft = this.coordsResize(partLeft,img);
    var areaLeft = document.querySelector(className[1]);
    areaLeft.coords = coordsLeft;
}

function onePart(part, className) {
    var coordsPart = this.coordsResize(part,img);
    var areaPart = document.querySelector(className);
    areaPart.coords = coordsPart;
}

function fourParts(partRightOut, partLeftOut, partRightIn, partLeftIn, className) {
    var coordsRightOut = this.coordsResize(partRightOut,img);
    var areaRightOut = document.querySelector(className[0]);
    areaRightOut.coords = coordsRightOut;

    var coordsLeftOut = this.coordsResize(partLeftOut,img);
    var areaLeftOut = document.querySelector(className[1]);
    areaLeftOut.coords = coordsLeftOut;

    var coordsRightIn = this.coordsResize(partRightIn,img);
    var areaRightIn = document.querySelector(className[2]);
    areaRightIn.coords = coordsRightIn;

    var coordsLeftIn = this.coordsResize(partLeftIn,img);
    var areaLeftIn = document.querySelector(className[3]);
    areaLeftIn.coords = coordsLeftIn;
}

///funçao q calcula os pontos de acordo com o tamanho
function coordsResize(coords, img){
    let vector=[];
    var width = img.clientWidth;
    var height = img.clientHeight;

    for(let i=0;i<coords.length;i=i+2){
        vector[i] = ((width*coords[i])/283).toFixed();
        vector[i+1] = ((height*coords[i+1])/400).toFixed();
    }

    var vectorString = "";
    vector.map((c)=>{
        vectorString += c +",";
    });
    vectorString = vectorString.substring(0, vectorString.length-1);
    return vectorString;
}

function showhide(classNameMap, classNameImg){
    const trapsElement = document.querySelectorAll(classNameMap);
    trapsElement.forEach((t)=>{
        t.addEventListener('mouseover',()=>{
            document.querySelector(classNameImg).setAttribute("style","display:block");
        });
        t.addEventListener('mouseout',()=>{
            document.querySelector(classNameImg).setAttribute("style","display:none");
        });
        t.addEventListener('click',()=>{
            document.querySelector(classNameImg).setAttribute("style","display:block");
        });
    });
}


function checkRadioMale(){
    var radioMale = document.querySelector(".radiomale");
    radioMale.addEventListener('click',()=>{
        var woman = document.querySelectorAll(".woman");
        var man = document.querySelectorAll(".man");
        woman.forEach((t)=>{
            t.setAttribute("style","display:none");
        });
        man.forEach((t)=>{
            t.setAttribute("style","display:block");
            this.mapMan();
        });
    });
}

function checkRadioFemale(){
    let radiofemale = document.querySelector(".radiofemale");
    radiofemale.addEventListener('click',()=>{
        let man = document.querySelectorAll(".man");
        let woman = document.querySelectorAll(".woman");
        this.mapWoman();
        woman.forEach((t)=>{
            t.setAttribute("style","display:block");
        });
        man.forEach((t)=>{
            t.setAttribute("style","display:none");
        });
    });
}

document.body.onresize = function() {
    mapMan();
    // mapWoman();
};

window.onload = function () {
    var man = document.querySelectorAll(".man");
    man.forEach((t)=>{
        t.setAttribute("style","display:block");
        this.mapMan();
    });
};
