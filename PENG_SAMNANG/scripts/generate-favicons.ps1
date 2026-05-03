Add-Type -AssemblyName System.Drawing

$publicDir = Join-Path $PSScriptRoot "..\public"
$sourcePath = Join-Path $publicDir "profile.jpg"

function New-SourceBitmap {
  param(
    [int]$Size
  )

  $sourceImage = [System.Drawing.Image]::FromFile($sourcePath)
  $side = [Math]::Min($sourceImage.Width, $sourceImage.Height)
  $sourceRect = [System.Drawing.Rectangle]::new(
    [int](($sourceImage.Width - $side) / 2),
    [int](($sourceImage.Height - $side) / 2),
    [int]$side,
    [int]$side
  )

  $bitmap = [System.Drawing.Bitmap]::new($Size, $Size)
  $graphics = [System.Drawing.Graphics]::FromImage($bitmap)
  $graphics.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
  $graphics.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
  $graphics.TextRenderingHint = [System.Drawing.Text.TextRenderingHint]::AntiAliasGridFit
  $graphics.Clear([System.Drawing.Color]::White)
  $destinationRect = [System.Drawing.Rectangle]::new(0, 0, $Size, $Size)
  $graphics.DrawImage($sourceImage, $destinationRect, $sourceRect, [System.Drawing.GraphicsUnit]::Pixel)

  $sourceImage.Dispose()
  $graphics.Dispose()

  return $bitmap
}

function Save-Png {
  param(
    [int]$Size,
    [string]$Name
  )

  $bitmap = New-SourceBitmap -Size $Size
  $path = Join-Path $publicDir $Name
  $bitmap.Save($path, [System.Drawing.Imaging.ImageFormat]::Png)
  $bitmap.Dispose()
}

Save-Png -Size 48 -Name "favicon-48x48.png"
Save-Png -Size 180 -Name "apple-touch-icon.png"
Save-Png -Size 192 -Name "favicon.png"
Save-Png -Size 512 -Name "favicon-512x512.png"

$icoBitmap = New-SourceBitmap -Size 64
$icon = [System.Drawing.Icon]::FromHandle($icoBitmap.GetHicon())
$iconPath = Join-Path $publicDir "favicon.ico"
$stream = [System.IO.File]::Open($iconPath, [System.IO.FileMode]::Create)
$icon.Save($stream)
$stream.Dispose()
$icon.Dispose()
$icoBitmap.Dispose()
