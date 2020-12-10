WebP Express 0.18.2. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-12-10 21:12:29

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.19
- Server software: Apache/2.4.35 (Win64) OpenSSL/1.1.1b PHP/7.2.19

Stack converter ignited
Destination folder does not exist. Creating folder: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/themes/simple/assets/images/search-icon.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp
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
- source: [doc-root]wp-content/themes/simple/assets/images/search-icon.png
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp
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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]wp-content/themes/simple/assets/images/search-icon.png" -o "[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp.lossy.webp'
File:      [doc-root]wp-content/themes/simple/assets/images/search-icon.png
Dimension: 24 x 24 (with alpha)
Output:    246 bytes Y-U-V-All-PSNR 99.00 99.00 99.00   99.00 dB
           (3.42 bpp)
block count:  intra4:          0  (0.00%)
              intra16:         4  (100.00%)
              skipped:         3  (75.00%)
bytes used:  header:             17  (6.9%)
             mode-partition:      5  (2.0%)
             transparency:      162 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |       0 |       0 |       0 |       0 |       0  (0.0%)
 intra16-coeffs:  |       3 |       0 |       0 |       0 |       3  (1.2%)
  chroma coeffs:  |       0 |       0 |       0 |       0 |       0  (0.0%)
    macroblocks:  |      75%|       0%|       0%|      25%|       4
      quantizer:  |      17 |      12 |       9 |       8 |
   filter level:  |       5 |       3 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |       3 |       0 |       0 |       0 |       3  (1.2%)
Lossless-alpha compressed size: 161 bytes
  * Header size: 34 bytes, image data size: 127
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   48

Success
Reduction: 34% (went from 373 bytes to 246 bytes)

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
D:\laragon\www\simpleWordpress\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]wp-content/themes/simple/assets/images/search-icon.png" -o "[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file '[doc-root]wp-content/webp-express/webp-images/doc-root/wp-content\themes\simple\assets\images\search-icon.png.webp.lossless.webp'
File:      [doc-root]wp-content/themes/simple/assets/images/search-icon.png
Dimension: 24 x 24
Output:    202 bytes (2.81 bpp)
Lossless-ARGB compressed size: 202 bytes
  * Header size: 41 bytes, image data size: 135
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   48

Success
Reduction: 46% (went from 373 bytes to 202 bytes)

Picking lossless
cwebp succeeded :)

Converted image in 10107 ms, reducing file size with 46% (went from 373 bytes to 202 bytes)
