WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-09 21:46:38

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp
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
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp
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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp.lossy.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png
Dimension: 600 x 600
Output:    6232 bytes Y-U-V-All-PSNR 51.95 49.56 49.57   51.00 dB
           (0.14 bpp)
block count:  intra4:        132  (9.14%)
              intra16:      1312  (90.86%)
              skipped:        87  (6.02%)
bytes used:  header:            184  (3.0%)
             mode-partition:   1268  (20.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1127 |      12 |       3 |       8 |    1150  (18.5%)
 intra16-coeffs:  |     271 |       4 |       4 |     768 |    1047  (16.8%)
  chroma coeffs:  |    1508 |      13 |       7 |    1029 |    2557  (41.0%)
    macroblocks:  |      16%|       0%|       0%|      84%|    1444
      quantizer:  |      20 |      20 |      16 |      12 |
   filter level:  |       7 |       5 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    2906 |      29 |      14 |    1805 |    4754  (76.3%)

Success
Reduction: 89% (went from 53 kb to 6 kb)

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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\cropped-header-simplewordpress-1310.png.webp.lossless.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/cropped-header-simplewordpress-1310.png
Dimension: 600 x 600
Output:    26198 bytes (0.58 bpp)
Lossless-ARGB compressed size: 26198 bytes
  * Header size: 762 bytes, image data size: 25410
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=4 transform=4 cache=7

Success
Reduction: 52% (went from 53 kb to 26 kb)

Picking lossy
cwebp succeeded :)

Converted image in 10704 ms, reducing file size with 89% (went from 53 kb to 6 kb)
