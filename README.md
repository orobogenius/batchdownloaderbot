### Status
[![Build Status](https://travis-ci.org/orobogenius/batchdownloaderbot.svg?branch=master)](https://travis-ci.org/orobogenius/batchdownloaderbot)

# Batchdownloaderbot - Telegram Bot
A telegram bot to grab files on a server that matches a given pattern.

## Description

It's possible to add a group of file names, for example, file01.mp4, file02.mp4 up to a certain number, say file100.mp4. This bot takes a single file url with a file name pattern specified by wildcard asterisk and grabs all the files that matches that pattern from the target host.

For example: http://files.example.com/videos/somelibrary/video*.mp4

\* will be replaced with either the numbers specified e.g 01 - 50 or with a letter e.g A - Z
