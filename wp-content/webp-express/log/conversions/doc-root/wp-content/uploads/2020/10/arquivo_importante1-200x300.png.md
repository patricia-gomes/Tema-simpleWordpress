WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-21 16:06:06

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp
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
- source: D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png
- destination: D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp
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
'cwebp' nÆo ‚ reconhecido como um comando interno
ou externo, um programa oper vel ou um arquivo em lotes.

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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp.lossy.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png
Dimension: 200 x 300
Output:    7626 bytes Y-U-V-All-PSNR 44.40 45.95 46.09   44.88 dB
           (1.02 bpp)
block count:  intra4:        199  (80.57%)
              intra16:        48  (19.43%)
              skipped:        98  (39.68%)
bytes used:  header:            284  (3.7%)
             mode-partition:    636  (8.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5636 |       6 |       6 |       0 |    5648  (74.1%)
 intra16-coeffs:  |       5 |       0 |       4 |       0 |       9  (0.1%)
  chroma coeffs:  |    1007 |       0 |      11 |       0 |    1018  (13.3%)
    macroblocks:  |      62%|       0%|      38%|       0%|     247
      quantizer:  |      18 |      12 |       8 |       8 |
   filter level:  |       5 |       3 |       0 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6648 |       6 |      21 |       0 |    6675  (87.5%)

Success
Reduction: 89% (went from 66 kb to 7 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' nÆo ‚ reconhecido como um comando interno
ou externo, um programa oper vel ou um arquivo em lotes.

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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png" -o "D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\laragon\www\simpleWordpress/wp-content/webp-express/webp-images/doc-root/wp-content\uploads\2020\10\arquivo_importante1-200x300.png.webp.lossless.webp'
File:      D:\laragon\www\simpleWordpress/wp-content/uploads/2020/10/arquivo_importante1-200x300.png
Dimension: 200 x 300
Output:    32880 bytes (4.38 bpp)
Lossless-ARGB compressed size: 32880 bytes
  * Header size: 929 bytes, image data size: 31925
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 51% (went from 66 kb to 32 kb)

Picking lossy
cwebp succeeded :)

Converted image in 3752 ms, reducing file size with 89% (went from 66 kb to 7 kb)
