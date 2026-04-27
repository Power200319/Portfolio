from pathlib import Path

from PIL import Image, ImageChops, ImageDraw, ImageFilter, ImageFont


ROOT = Path(__file__).resolve().parents[1]
PROFILE_PATH = ROOT / "src" / "assets" / "profile.jpg"
OUTPUT_PATH = ROOT / "public" / "share-preview.png"
SIZE = (1200, 630)


def load_font(size: int, bold: bool = False) -> ImageFont.FreeTypeFont | ImageFont.ImageFont:
    candidates = []
    if bold:
        candidates.extend(
            [
                "C:/Windows/Fonts/arialbd.ttf",
                "C:/Windows/Fonts/segoeuib.ttf",
                "C:/Windows/Fonts/calibrib.ttf",
            ]
        )
    else:
        candidates.extend(
            [
                "C:/Windows/Fonts/arial.ttf",
                "C:/Windows/Fonts/segoeui.ttf",
                "C:/Windows/Fonts/calibri.ttf",
            ]
        )

    for candidate in candidates:
        path = Path(candidate)
        if path.exists():
            return ImageFont.truetype(str(path), size)
    return ImageFont.load_default()


def vertical_gradient(size: tuple[int, int], top: tuple[int, int, int], bottom: tuple[int, int, int]) -> Image.Image:
    width, height = size
    image = Image.new("RGBA", size)
    draw = ImageDraw.Draw(image)
    for y in range(height):
        t = y / max(height - 1, 1)
        color = tuple(int(top[i] * (1 - t) + bottom[i] * t) for i in range(3)) + (255,)
        draw.line((0, y, width, y), fill=color)
    return image


def add_glow(base: Image.Image, box: tuple[int, int, int, int], color: tuple[int, int, int, int], blur: int) -> None:
    layer = Image.new("RGBA", base.size, (0, 0, 0, 0))
    draw = ImageDraw.Draw(layer)
    draw.ellipse(box, fill=color)
    base.alpha_composite(layer.filter(ImageFilter.GaussianBlur(blur)))


def draw_badge(draw: ImageDraw.ImageDraw, xy: tuple[int, int], text: str, font: ImageFont.ImageFont) -> None:
    x, y = xy
    text_box = draw.textbbox((0, 0), text, font=font)
    width = text_box[2] - text_box[0]
    height = text_box[3] - text_box[1]
    padding_x = 20
    padding_y = 12
    draw.rounded_rectangle(
        (x, y, x + width + padding_x * 2, y + height + padding_y * 2),
        radius=24,
        fill=(15, 30, 54, 230),
        outline=(120, 212, 255, 90),
        width=1,
    )
    draw.text((x + padding_x, y + padding_y - 2), text, font=font, fill=(220, 247, 255, 255))


def fit_profile(image: Image.Image, target_size: tuple[int, int]) -> Image.Image:
    target_w, target_h = target_size
    source_w, source_h = image.size
    scale = max(target_w / source_w, target_h / source_h)
    resized = image.resize((int(source_w * scale), int(source_h * scale)), Image.Resampling.LANCZOS)
    left = max((resized.width - target_w) // 2, 0)
    top = max((resized.height - target_h) // 2, 0)
    return resized.crop((left, top, left + target_w, top + target_h))


def main() -> None:
    canvas = vertical_gradient(SIZE, (8, 16, 33), (13, 28, 52))
    add_glow(canvas, (-120, -80, 420, 360), (0, 234, 255, 100), 70)
    add_glow(canvas, (720, -60, 1240, 340), (108, 92, 231, 88), 85)
    add_glow(canvas, (820, 260, 1280, 700), (0, 194, 255, 52), 90)

    grid = Image.new("RGBA", SIZE, (0, 0, 0, 0))
    grid_draw = ImageDraw.Draw(grid)
    for x in range(0, SIZE[0], 48):
      grid_draw.line((x, 0, x, SIZE[1]), fill=(255, 255, 255, 10), width=1)
    for y in range(0, SIZE[1], 48):
      grid_draw.line((0, y, SIZE[0], y), fill=(255, 255, 255, 8), width=1)
    canvas.alpha_composite(grid)

    profile = Image.open(PROFILE_PATH).convert("RGBA")
    profile = fit_profile(profile, (320, 430))

    card = Image.new("RGBA", SIZE, (0, 0, 0, 0))
    card_draw = ImageDraw.Draw(card)
    card_draw.rounded_rectangle(
        (790, 100, 1100, 530),
        radius=42,
        fill=(10, 20, 36, 220),
        outline=(110, 233, 255, 85),
        width=2,
    )
    card_draw.rounded_rectangle(
        (774, 84, 1116, 546),
        radius=56,
        outline=(102, 232, 249, 55),
        width=2,
    )
    canvas.alpha_composite(card.filter(ImageFilter.GaussianBlur(0)))

    profile_mask = Image.new("L", (320, 430), 0)
    ImageDraw.Draw(profile_mask).rounded_rectangle((0, 0, 320, 430), radius=36, fill=255)
    rounded_profile = Image.new("RGBA", (320, 430), (0, 0, 0, 0))
    rounded_profile.paste(profile, (0, 0), profile_mask)
    canvas.alpha_composite(rounded_profile, (785, 100))

    line_layer = Image.new("RGBA", SIZE, (0, 0, 0, 0))
    line_draw = ImageDraw.Draw(line_layer)
    line_draw.arc((720, 30, 1170, 480), start=210, end=330, fill=(103, 232, 249, 115), width=4)
    line_draw.arc((700, 230, 1160, 690), start=20, end=130, fill=(129, 140, 248, 90), width=3)
    canvas.alpha_composite(line_layer)

    draw = ImageDraw.Draw(canvas)
    title_font = load_font(64, bold=True)
    role_font = load_font(32, bold=True)
    body_font = load_font(24)
    small_font = load_font(20, bold=True)

    draw.text((72, 88), "PENG SAMNANG", font=title_font, fill=(242, 250, 255, 255))
    draw.text((74, 168), "Full-Stack Web Developer", font=role_font, fill=(104, 232, 249, 255))
    draw.text(
        (74, 228),
        "Building modern web applications with React, Django,\nPostgreSQL, REST APIs, and scalable business workflows.",
        font=body_font,
        fill=(203, 219, 242, 255),
        spacing=12,
    )

    draw_badge(draw, (74, 336), "React", small_font)
    draw_badge(draw, (205, 336), "Django", small_font)
    draw_badge(draw, (355, 336), "PostgreSQL", small_font)

    draw.text((74, 428), "pengsamnang.site", font=load_font(26, bold=True), fill=(255, 255, 255, 255))
    draw.text((74, 470), "Portfolio • Projects • Full-Stack Solutions", font=body_font, fill=(150, 170, 202, 255))

    accent = Image.new("RGBA", SIZE, (0, 0, 0, 0))
    accent_draw = ImageDraw.Draw(accent)
    accent_draw.rounded_rectangle((72, 548, 466, 558), radius=10, fill=(103, 232, 249, 255))
    accent_draw.rounded_rectangle((480, 548, 650, 558), radius=10, fill=(99, 102, 241, 220))
    canvas.alpha_composite(accent)

    OUTPUT_PATH.parent.mkdir(parents=True, exist_ok=True)
    canvas.convert("RGB").save(OUTPUT_PATH, quality=95)
    print(f"Saved {OUTPUT_PATH}")


if __name__ == "__main__":
    main()
