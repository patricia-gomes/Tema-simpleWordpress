WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-21 16:06:19

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp
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
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp
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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp.lossy.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png
Dimension: 1340 x 625
Output:    22398 bytes Y-U-V-All-PSNR 49.62 50.46 50.55   49.90 dB
           (0.21 bpp)
block count:  intra4:        492  (14.64%)
              intra16:      2868  (85.36%)
              skipped:       748  (22.26%)
bytes used:  header:            390  (1.7%)
             mode-partition:   3864  (17.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   11000 |      32 |      16 |      26 |   11074  (49.4%)
 intra16-coeffs:  |     578 |      54 |      71 |    1116 |    1819  (8.1%)
  chroma coeffs:  |    2687 |      65 |      59 |    2413 |    5224  (23.3%)
    macroblocks:  |      23%|       2%|       1%|      73%|    3360
      quantizer:  |      20 |      19 |      15 |      11 |
   filter level:  |       9 |       8 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   14265 |     151 |     146 |    3555 |   18117  (80.9%)

Success
Reduction: 90% (went from 230 kb to 22 kb)

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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\image_logo.png.webp.lossless.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/image_logo.png
Dimension: 1340 x 625
Output:    109510 bytes (1.05 bpp)
Lossless-ARGB compressed size: 109510 bytes
  * Header size: 3725 bytes, image data size: 105759
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=9

Success
Reduction: 53% (went from 230 kb to 107 kb)

Picking lossy
cwebp succeeded :)

Converted image in 6834 ms, reducing file size with 90% (went from 230 kb to 22 kb)
