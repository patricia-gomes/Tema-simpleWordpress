WebP Express 0.18.2. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-10-09 20:57:31

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited
Destination folder does not exist. Creating folder: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/themes/twentynineteen/screenshot.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/themes/twentynineteen/screenshot.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' n�o � reconhecido como um comando interno
ou externo, um programa oper�vel ou um arquivo em lotes.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]wp-content/themes/twentynineteen/screenshot.png" -o "[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp.lossy.webp'
File:      [doc-root]wp-content/themes/twentynineteen/screenshot.png
Dimension: 1200 x 900
Output:    33480 bytes Y-U-V-All-PSNR 46.82 54.81 53.79   48.21 dB
           (0.25 bpp)
block count:  intra4:       1070  (25.03%)
              intra16:      3205  (74.97%)
              skipped:      2528  (59.13%)
bytes used:  header:            389  (1.2%)
             mode-partition:   6190  (18.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   22578 |     224 |     136 |     121 |   23059  (68.9%)
 intra16-coeffs:  |     472 |     281 |     308 |     385 |    1446  (4.3%)
  chroma coeffs:  |    1700 |     143 |     116 |     411 |    2370  (7.1%)
    macroblocks:  |      24%|       3%|       5%|      68%|    4275
      quantizer:  |      20 |      17 |      14 |      10 |
   filter level:  |      13 |       8 |       6 |      13 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   24750 |     648 |     560 |     917 |   26875  (80.3%)

Success
Reduction: 81% (went from 171 kb to 33 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' n�o � reconhecido como um comando interno
ou externo, um programa oper�vel ou um arquivo em lotes.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]wp-content/themes/twentynineteen/screenshot.png" -o "[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\twentynineteen\screenshot.png.webp.lossless.webp'
File:      [doc-root]wp-content/themes/twentynineteen/screenshot.png
Dimension: 1200 x 900
Output:    161434 bytes (1.20 bpp)
Lossless-ARGB compressed size: 161434 bytes
  * Header size: 551 bytes, image data size: 160858
  * Lossless features used: PALETTE
  * Precision Bits: histogram=5 transform=4 cache=2
  * Palette size:   64

Success
Reduction: 8% (went from 171 kb to 158 kb)

Picking lossy
cwebp succeeded :)

Converted image in 43315 ms, reducing file size with 81% (went from 171 kb to 33 kb)
